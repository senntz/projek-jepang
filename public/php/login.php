<?php 
session_start();

include("koneksi.php");

$err        = "";
$username   = "";
$ingataku   = "";

if(isset($_COOKIE['cookie_username'])){
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from login where username = '$cookie_username'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if(password_verify($cookie_password, $r1['password'])){
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if(isset($_SESSION['session_username'])){
    header("location:home.php");
    exit();
}

if(isset($_POST['login'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $ingataku   = $_POST['ingataku'];

    if($username == '' or $password == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "select * from login where username = '$username'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array(result: $q1);

        if($r1['username'] == ''){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        }elseif(password_verify($password, $r1['password'])){
            
        }else{
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_id'] = $r1['id'];
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = $password;

            if($ingataku == 1){
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = $password;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            if ($r1['role'] == "admin") {
                header("location:admin.php");
            } else {
                header("location:home.php");
            }
            
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="left-content">
                <img id="logo" src="..\\images\\logo-putih.png" alt="">
                <p>"Jika belum memiliki akun,</br> ayo bergabung dan mulai jurnal anda."</p>
                <a href="register.php" id="daftar-btn">Daftar</a>
            </div>
        </div>
        <div class="right-side">
            <div class="login-div">
                <span id="judul">LOGIN</span>
                <form class="form-login" action="" method="POST" role="form">
                    <div class="input-group">
                        <img id="user-logo" src="../images/profil-logo.png" alt="">
                        <img class="line" src="../images/line-login.png" alt="">
                        <input id="user-input" type="text" name="username" value="<?php echo $username ?>" placeholder="Enter your username" required>
                    </div>
                    <div class="input-group">
                        <img id="pass-logo" src="../images/pass-logo.png" alt="">
                        <img id="line-pass" class="line" src="../images/line-login.png" alt="">
                        <input id="pass-input" type="password" name="password" placeholder="Enter your password" required>
                        <img id="eye-close" src="../images/eye-close.png" alt="">
                        <script>
                            let eyeicon = document.getElementById("eye-close");
                            let password = document.getElementById("pass-input");

                            eyeicon.onclick = function(){
                                if(password.type == "password"){
                                    password.type = "text";
                                    eyeicon.src = "../images/eye-open.png";
                                } else {
                                    password.type = "password";
                                    eyeicon.src = "../images/eye-close.png";
                                }
                            }
                        </script>
                    </div>

                    <!-- Tempat untuk menampilkan error password -->
                    <?php if (strpos($err, 'Password yang dimasukkan tidak sesuai.') !== false): ?>
                        <div class="error-message" style="color: red;">
                            Password yang dimasukkan tidak sesuai.
                        </div>
                    <?php endif; ?>

                    <div class="below">
                        <div>
                            <input id="remember" type="checkbox" name="ingataku" value="1">
                            <p>Ingatkan saya</p>
                        </div>
                        <p>Lupa password?</p>
                    </div>
                    <input type="submit" class="login-button" name="login" value="Masuk">
                </form>
            </div>
        </div>
    </div>
</body>
</html>