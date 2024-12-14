<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <div class="right-side">
            <div class="reg-div">
                <h1>REGISTER</h1>
                <form class="form-reg" action="POST">
                    <div class="input-group">
                        <img id="user-logo" src="../images/profil-logo.png" alt="">
                        <img class="line" src="../images/line-login.png" alt="">
                        <input id="user-input" type="text" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-group">
                        <img id="pass-logo" src="../images/pass-logo.png" alt="">
                        <img id="line-pass" class="line" src="../images/line-login.png" alt="">
                        <input id="pass-input" type="password" id="password" placeholder="Enter your password" required>
                        <img id="eye-pass" class="eye-close" src="../images/eye-close.png" alt="">
                    </div>
                    <div class="input-group">
                        <img id="conf-logo" src="../images/pass-logo.png" alt="">
                        <img id="line-conf" class="line" src="../images/line-login.png" alt="">
                        <input id="conf-input" type="password" id="confirm" placeholder="Re-enter your password" required>
                        <img id="eye-conf" class="eye-close" src="../images/eye-close.png" alt="">
                    </div>
                    <div class="below">
                        <div>
                            <input id="remember" type="checkbox">
                            <p>Ingatkan saya</p>
                        </div>
                        
                        <p>Lupa password?</p>
                    </div>
                    <input type="submit" class="reg-button" value="Daftar">
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
            </div>
        </div>
        <div class="left-side">
            <div class="left-content">
                <img id="logo" src="../images/Logo.png" alt="">
                <p>"Jika belum memiliki akun, ayo bergabung
                    dan mulai jurnal anda."</p>
            </div>
        </div>
    </div>
</body>
</html>