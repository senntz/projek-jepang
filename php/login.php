<?php 
session_start();

// Database connection
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "login";
$koneksi = mysqli_connect($host_db, $user_db, $pass_db, $nama_db);

// Initialize variables
$err = "";
$username = "";
$ingataku = "";

// Check for cookies
if (isset($_COOKIE['cookie_username'])) {
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "SELECT * FROM login WHERE username = '$cookie_username'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    if ($r1['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

// Redirect if already logged in
if (isset($_SESSION['session_username'])) {
    header("location:index.php"); 
    exit();
}

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ingataku = isset($_POST['ingataku']) ? $_POST['ingataku'] : '';

    // Validate input
    if ($username == '' || $password == '') {
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    } else {
        // Fetch user data
        $sql1 = "SELECT * FROM login WHERE username = ?";
        $stmt = $koneksi->prepare($sql1);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $r1 = $result->fetch_assoc();

        if (!$r1) {
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        } elseif (!password_verify($password, $r1 ['password'])) {
            $err .= "Password yang dimasukkan tidak sesuai.";
        }       

        if (empty($err)) {
            $_SESSION['session_username'] = $username; // Store username in session

            if ($ingataku == 1) {
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                $cookie_name = "cookie_password";
                $cookie_value = $r1['password']; // Store hashed password
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            }
            header("location:index.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="left-content">
                <img id="logo" src="..\\images\\logo-putih.png" alt="">
                <p>"Jika belum memiliki akun, ayo bergabung dan mulai jurnal anda."</p>
                <a href="register.php" id="daftar-btn">Daftar</a>
            </div>
        </div>
        <div class="right-side">
            <div class="login-div">
                <span id="judul">LOGIN</span>
                <form class="form-login" method="POST">
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