<?php

$isFocused = isset($_GET['focus']) && $_GET['focus'] === 'true';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/index.css">
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
    <?php include_once __dir__ . "\\navbar.php";?>
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
    <div class="content-container">
        <span>TOP Destination</span>
        <div id="content">
            <div id="tokyo-dome" class="content-wrap">
                <img src="..\\images\\tokyo-dome.png" alt="">
                <div class="content-name">
                    <div class="content-judul">
                        <span>Tokyo Dome</span>    
                        <img src="..\\images\\content-judul.png" alt="">
                    </div>
                    <p>Prasarana serba guna untuk segala cuaca</p>
                </div>
                <div class="content-share">
                    <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                    <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                    <img src="..\\images\\share-icon.png" alt="" class="share-icon">
                </div>
            </div>
            <div id="tsukiji-market" class="content-wrap">
            <img src="..\\images\\tsukiji-market.png" alt="">
                <div class="content-name">
                    <div class="content-judul">
                        <span>Tsukiji Outer Market</span>    
                        <img src="..\\images\\content-judul.png" alt="">
                    </div>
                    <p>Pasar ikan segar dan olahannya</p>
                </div>
                <div class="content-share">
                    <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                    <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                    <img src="..\\images\\share-icon.png" alt="" class="share-icon">
                </div>
            </div>
            <div id="mt-fuji" class="content-wrap">
            <img src="..\\images\\mt-fuji.png" alt="">
                <div class="content-name">
                    <div class="content-judul">
                        <span>Mt. Fuji</span>    
                        <img src="..\\images\\content-judul.png" alt="">
                    </div>
                    <p>Tempat paling ikonik di Jepang</p>
                </div>
                <div class="content-share">
                    <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                    <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                    <img src="..\\images\\share-icon.png" alt="" class="share-icon">
                </div>
            </div>
            <div id="tokyo-dome" class="content-wrap">
            <img src="..\\images\\tokyo-dome.png" alt="">
                <div class="content-name">
                    <div class="content-judul">
                        <span>Tokyo Dome</span>    
                        <img src="..\\images\\content-judul.png" alt="">
                    </div>
                    <p>Prasarana serba guna untuk segala cuaca</p>
                </div>
                <div class="content-share">
                    <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                    <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                    <img src="..\\images\\share-icon.png" alt="" class="share-icon">
                </div>
            </div>
            <div id="tsukiji-market" class="content-wrap">
            <img src="..\\images\\tsukiji-market.png" alt="">
                <div class="content-name">
                    <div class="content-judul">
                        <span>Tsukiji Outer Market</span>    
                        <img src="..\\images\\content-judul.png" alt="">
                    </div>
                    <p>Pasar ikan segar dan olahannya</p>
                </div>
                <div class="content-share">
                    <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                    <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                    <img src="..\\images\\share-icon.png" alt="" class="share-icon">
                </div>
            </div>
            <div id="mt-fuji" class="content-wrap">
            <img src="..\\images\\mt-fuji.png" alt="">
                <div class="content-name">
                    <div class="content-judul">
                        <span>Mt. Fuji</span>    
                        <img src="..\\images\\content-judul.png" alt="">
                    </div>
                    <p>Tempat paling ikonik di Jepang</p>
                </div>
                <div class="content-share">
                    <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                    <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                    <img src="..\\images\\share-icon.png" alt="" class="share-icon">
                </div>
            </div>
        </div>
        <a href="\\destination.php">See more</a>
    </div>
    <?php include_once __dir__ . "\\footer.php";?>
</body>
</html>