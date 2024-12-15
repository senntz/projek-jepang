<?php

$isFocused = isset($_GET['focus']) && $_GET['focus'] === 'true';

?>

<!DOCTYPE html>
<head>
    <title>Post - AllJapan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/post.css">
</head>
<body>
    <div id="navbar">
        <?php include_once __dir__ . "/navbar.php";?>
    </div>
    <div class="over-img">
        <a href="destination.php">< Back</a>
        <span>Tokyo Dome</span> <!-- nama tempat -->
        <p>Prasarana serba guna untuk segala cuaca</p> <!-- keterangan nama tempat -->
        <div>
            <div id="post-profile">
                <img src="../images/post-profile-pic.png" alt="">
                <div>
                    <p>Admin</p>  <!-- nama yang upload -->
                    <p>3 Desember 2024</p>  <!-- tanggal diupload -->
                </div>
            </div>
            <div id="post-share">
                <img src="..\\images\\bookmark-icon.png" alt="" class="bookmark-icon">
                <img src="..\\images\\like-icon.png" alt="" class="like-icon">
                <img src="..\\images\\share-icon.png" alt="" class="share-icon">
            </div>
        </div>
    </div>
    <img src="../images/post-image.png" alt="" class="post-image">
    <div id="below-img">
        <div id="post-isi">
            <span>Tempat seru buat nonton baseball, konser, dan hangout, ada taman cantik bergaya abad ke-17 di dekatnya!</span> <!-- subheader tempat -->
            <p>Korakuen, yang ada di tengah Tokyo, punya banyak hal menarik walaupun ukurannya kecil. Di sini ada Tokyo Dome, stadion besar yang sering dipakai buat pertandingan baseball dan konser. Di sebelahnya, ada taman hiburan dan kompleks belanja yang cocok buat hiburan anak-anak maupun orang dewasa. Gak jauh dari situ, sekitar 1 km, ada Universitas Tokyo yang terkenal dengan bangunan dan pemandangannya yang fotogenik.
Jangan lupa mampir ke area Iidabashi yang punya spot menarik seperti Kagurazaka, kawasan belanja dan restoran yang keren, serta taman bersejarah Koishikawa Korakuen.</p> <!-- isi post tempat -->
        </div>
        <div id="post-book"></div>
    </div>
    <div id="galeri">
        <span>Galeri</span>
        <div id="galeri-container">
            <img src="../images/postingan-left.png" alt="" id="galeri-left"> <!-- isi galeri post kiri -->
            <img src="../images/postingan-center.png" alt="" id="galeri-center"> <!-- isi galeri post tengah -->
            <img src="../images/postingan-right.png" alt="" id="galeri-right"> <!-- isi galeri post kanan -->
        </div>
    </div>
    <div id="recomendation">
        <span>Rekomendasi Untuk Anda</span>
        <div id="recomend-field">
            <!-- ini buat bek en maks 3 post -->
            <div class="content-wrap">
                <!-- buat bek en looping katalog -->
                <img src="..\\images\\tokyo-dome.png" alt="">   <!--  ini gambar tempat  -->
                <div class="content-name">
                    <div class="content-judul">
                        <a href="/post.php">Tokyo Dome</a>  <!--  ini nama judul / nama tempat  -->
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
    </div>
    <?php include_once __dir__ . "/footer.php";?>
    
    <script>
        function cariFokus() {
            window.location.href = "?focus=true"
        }
        function gakFokus() {
            window.location.href = "?focus=false"
        }
    </script>
</body>
</html>