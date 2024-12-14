<?php

$isFocused = isset($_GET['focus']) && $_GET['focus'] === 'true';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/home.css">
    <script>
        function cariFokus() {
            window.location.href = "?focus=true"
        }
        function gakFokus() {
            window.location.href = "?focus=false"
        }
    </script>
</head>
<body>
    <div class="navbar">
        <img id="logo" src="../images/Logo.png" alt="">
        <div class="menu">
            <p>Home</p>
            <p>Destination</p>
            <p>About</p>
        </div>
        <div class="nav-btn">
            <div id="search">
                <?php if ($isFocused): ?>
                    <input type="text" id="search-field" onblur="gakFokus()">
                <?php else: ?>
                    <img src="../images/search.png" alt="">
                    <span onclick="cariFokus()">Search</span>
                <?php endif ?>
            </div>
            <a href="register.php" id="daftar-btn">
                <div class="daftar-logo"></div>
                <span>Daftar</span>
            </a>
            <a href="login.php" id="masuk-btn">
                <div class="masuk-logo"></div>
                <span>Masuk</span>
            </a>
        </div>
    </div>
    <div class="banner">
        <div class="upper-banner">
            <div>
                <img src="../images/JEPANG.png" alt="">
                <p>Temukan rekomendasi destinasi wisata, budaya, makanan, dan apapun yang berkaitan dengan jepang</p>
                <button>Explore</button>
            </div>
        </div>
        <div class="bottom-banner">
            <div class="city-slide">
                <img src="../images/ellipse.png" alt="">
                <span>Hokkaido  : Otaru Canal</span>
            </div>
            <div class="banner-slide">

            </div>
        </div>
    </div>
    <div class="jepang-container">
        <div id="japan-flag"><img src="../images/japan-flag.png" alt=""></div>
        <div id="opening-jepang">
            <span>JEPANG</span>
            <p>Jepang (日本国, Nippon-koku) adalah sebuah negara kepulauan di Asia Timur. Letaknya di ujung barat Samudra Pasifik, di sebelah timur Laut Jepang, dan bersebelahan dengan Tiongkok, Korea Selatan, dan Rusia. </p>
        </div>
    </div>
</body>
</html>