<?php
session_start();

include("koneksi.php");


$isFocused = isset($_GET['focus']) && $_GET['focus'] === 'true';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page - AllJapan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div id="navbar">
        <?php include_once __dir__ . "/navbar.php";?>
    </div>
    <div id="profile-container">
        <div id="pic-edit">
            <img src="../images/profile-picture.png" alt="" id="profile-pic">
            <p>Ukuran gambar: maks. 1 MB</br>
            Format gambar: .JPEG, .PNG</p>
            <button onclick="hehe()">Pilih Gambar</button>
        </div>
        <div id="data-edit">
            <form action="" method="POST">
                <div id="username">
                    <label>Username</label>
                    <span>:</span>
                    <?php
                        echo'
                            <input type="text" id="username-field" value="'.$_SESSION['session_username'].'" disabled>
                        ';
                    ?>
                </div>
                <div id="password">
                    <label>Password</label>
                    <span>:</span>
                    <?php
                        echo'
                            <input type="password" id="password-field" value="'.$_SESSION['session_password'].'">
                        ';
                    ?>
                </div>
                <input type="submit" name="update" id="update-btn" value="Update Data" onclick="hehe()">
            </form>
        </div>
    </div>
    <div id="content-container">
        <div id="pilih">
            <div id="bookmark" class="pilihan pilihan-aktif">
                <img src="../images/bookmark-icon.png" alt="">
                <span>Bookmark</span>
            </div>
            <div id="suka" class="pilihan">
                <img src="../images/like-icon.png" alt="">
                <span>Disukai</span>
            </div>
        </div>
        <div id="content-wrap">
                <div id="content"></div>
                <div id="empty">
                    <span>Tidak Ada Hasil</span>
                </div>
        </div>
    </div>

    <?php include_once __dir__ . "/footer.php";?>

    <script>
        function cariFokus() {
            window.location.href = "?focus=true"
        }
        function gakFokus() {
            window.location.href = "?focus=false"
        }

        let pilihAktif = document.getElementById("bookmark");
        const divs = document.querySelectorAll(".pilihan");
        divs.forEach(div => {
            div.addEventListener('click', () => {
                if (pilihAktif) {
                    pilihAktif.classList.remove("pilihan-aktif");
                }

                pilihAktif = div;

                div.classList.add("pilihan-aktif");
            });
        });

        function hehe() {
            window.alert("Mohon maaf fitur ini belum bisa digunakan :)");
        }
    </script>
</body>
</html>