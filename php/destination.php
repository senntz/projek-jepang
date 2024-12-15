<?php

$isFocused = isset($_GET['focus']) && $_GET['focus'] === 'true';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Destination Page - AllJapan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/destination.css">
</head>
<body>
    <div id="navbar">
        <?php include_once __dir__ . "/navbar.php";?>
    </div>
    <div id="judul-container">
        <span id="judul">Jepang</span>
        <span id="keterangan">Temukan Destinasi Anda</span>
    </div>
    <div class="filter">
        <button class="btn-filter btn-nyala" id="semua">Semua</button>
        <button class="btn-filter" id="taman">Taman</button>
        <button class="btn-filter" id="gunung">Gunung</button>
        <button class="btn-filter" id="market">Market</button>
        <button class="btn-filter" id="onsen">Onsen</button>
        <button class="btn-filter" id="museum">Museum</button>
        <button class="btn-filter" id="lain">Lain - lain</button>
    </div>
    <div class="content-container">
        <div class="content-wrap">
            <!-- buat bek en looping katalog -->
            <img src="..\\images\\tokyo-dome.png" alt="">   <!--  ini gambar tempat  -->
            <div class="content-name">
                <div class="content-judul">
                    <span>Tokyo Dome</span>  <!--  ini nama judul / nama tempat  -->
                    <img src="..\\images\\content-judul.png" alt="">
                </div>
                <p>Prasarana serba guna untuk segala cuaca</p>  <!--  ini keterangan tempat  -->
            </div>
            <div class="content-share">
                <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                <img src="..\\images\\share-icon.png" alt="" class="share-icon">
            </div>
        </div>
    </div>
    <?php include_once __dir__ . "/footer.php";?>

    <script>
        let buttonAktif = document.getElementById("semua");

        function cariFokus() {
            window.location.href = "?focus=true"
        }
        function gakFokus() {
            window.location.href = "?focus=false"
        }

        const buttons = document.querySelectorAll(".btn-filter");
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                if (buttonAktif) {
                    buttonAktif.classList.remove("btn-nyala");
                }

                buttonAktif = button;

                button.classList.add("btn-nyala");
            });
        });
    </script>
</body>
</html>