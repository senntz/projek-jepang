<?php
session_start();

include("koneksi.php");

// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables
$err = "";
$username = "";
$password = "";
$confirm_password = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm'];

    // Password validation pattern
    $pattern = "/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";

    if (!preg_match($pattern, $password)) {
        echo "<script>alert('Password harus 8 karakter, memiliki minimal 1 huruf besar, dan 1 angka.');</script>";
        header("Location:register.php");
    } else {
        // Prepare statement to prevent SQL injection
        $stmt = mysqli_prepare($koneksi, "SELECT username, password FROM login WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_bind_result($stmt, $db_username, $db_password);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Akun sudah terdaftar!.');</script>";
            header("Location:register.php");
        } else {
            // Check if passwords match
            if ($password === $confirm_password) {
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Insert the hashed password into the database
                $stmt = mysqli_prepare($koneksi, "INSERT INTO login (username, password) VALUES (?, ?)");
                mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('Registrasi Berhasi!');</script>";
                    header("Location:login.php");
                } else {
                    echo "<script>alert('Registrasi Error! Harap coba lagi.');</script>";
                    header("Location:register.php");
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<script>alert('Password tidak sama!');</script>";
                header("Location:register.php");
            }
        }

        // Close the prepared statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="reg-div">
                <span id="judul">REGISTER</span>
                <form class="form-reg" action="" method="POST">
                    <div class="input-group">
                        <img id="user-logo" src="../images/profil-logo.png" alt="">
                        <img class="line" src="../images/line-login.png" alt="">
                        <input id="user-input" type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-group">
                        <img id="pass-logo" src="../images/pass-logo.png" alt="">
                        <img id="line-pass" class="line" src="../images/line-login.png" alt="">
                        <input id="pass-input" type="password" name="password" placeholder="Enter your password" required>
                        <img id="eye-pass" class="eye-close" src="../images/eye-close.png" alt="">
                    </div>
                    <div class="input-group">
                        <img id="conf-logo" src="../images/pass-logo.png" alt="">
                        <img id="line-conf" class="line" src="../images/line-login.png" alt="">
                        <input id="conf-input" type="password" name="confirm" placeholder="Re-enter your password" required>
                        <img id="eye-conf" class="eye-close" src="../images/eye-close.png" alt="">
                    </div>
                    <div class="below">
                        <div>
                            <input id="remember" type="checkbox">
                            <p>Ingatkan saya</p>
                        </div>
                        <p>Lupa password?</p>
                    </div>
                    <input type="submit" class="reg-button" name="submit" value="Daftar">
                </form>
                <script>
                    let eyeiconpass = document.getElementById("eye-pass");
                    let eyeiconconf = document.getElementById("eye-conf");
                    let password = document.getElementById("pass-input");
                    let conf = document.getElementById("conf-input");

                    eyeiconpass.onclick = function(){
                        if(password.type == "password"){
                            password.type = "text";
                            eyeiconpass.src = "../images/eye-open.png";
                        } else {
                            password.type = "password";
                            eyeiconpass.src = "../images/eye-close.png";
                        }
                    }
                    eyeiconconf.onclick = function(){
                        if(conf.type == "password"){
                            conf.type = "text";
                            eyeiconconf.src = "../images/eye-open.png";
                        } else {
                            conf.type = "password";
                            eyeiconconf.src = "../images/eye-close.png";
                        }
                    }
                </script>
                <?php if (!empty($err)): ?>
                    <div class="error-messages" style="color: red;">
                        <ul>
                            <?php echo $err; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="right-side">
            <div class="right-content">
                <img id="logo" src="..\\images\\logo-putih.png" alt="">
                <p>"Jika anda sudah memiliki akun,</br> masuk dan nikmati fitur fitur yang kami sediakan"</p>
                <a href="login.php" id="masuk-btn">Masuk</a>
            </div>
        </div>
    </div>
</body>
</html>