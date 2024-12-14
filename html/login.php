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
                <img id="logo" src="../images/Logo.png" alt="">
                <p>"Jika belum memiliki akun, ayo bergabung
                    dan mulai jurnal anda."</p>
            </div>
        </div>
        <div class="right-side">
            <div class="login-div">
                <h2>LOGIN</h2>
                <form class="form-login" action="POST">
                    <div class="input-group">
                        <img id="user-logo" src="../images/profil-logo.png" alt="">
                        <img class="line" src="../images/line-login.png" alt="">
                        <input id="user-input" type="text" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-group">
                        <img id="pass-logo" src="../images/pass-logo.png" alt="">
                        <img id="line-pass" class="line" src="../images/line-login.png" alt="">
                        <input id="pass-input" type="password" id="password" placeholder="Enter your password" required>
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
                    <div class="below">
                        <div>
                            <input id="remember" type="checkbox">
                            <p>Ingatkan saya</p>
                        </div>
                        
                        <p>Lupa password?</p>
                    </div>
                    <input type="submit" class="login-button" value="Masuk">
                </form>
            </div>
        </div>
    </div>
</body>
</html>