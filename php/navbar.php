<?php
    if(isset($_SESSION["id"])){
        
    }
?>

<header>
    <div id="logo"></div>
    <nav id="navigasi">
        <a href="index.php" id="nav-home">Home</a>
        <a href="destination.php" id="nav-dest">Destination</a>
        <a href="about.php" id="nav-abt">About</a>
    </nav>
    <div class="nav-btn">
        <!-- ini buat bek en -->
            <div id="search">
                <?php if ($isFocused): ?>
                    <form action="" method="POST">
                        <input type="text" id="search-field" onblur="gakFokus()">
                    </form>
                <?php else: ?>
                    <div id="search-icon" onclick="cariFokus()"></div>
                    <span onclick="cariFokus()">Search</span>
                <?php endif ?>
            </div>
            <a href="profile.php" id="profile-btn">
                <img id="profil-pic" src="..\\images\\profile-pic.png" alt="">
                <span>Nama Profil</span>
            </a>
            <a href="logout.php" id="logout-btn">
                <div class="logout-logo"></div>
                <span>Logout</span>
            </a>
        <!-- ini buat bek en -->
            <a href="register.php" id="daftar-btn">
                <div class="daftar-logo"></div>
                <span>Daftar</span>
            </a>
            <a href="login.php" id="masuk-btn">
                <div class="masuk-logo"></div>
                <span>Masuk</span>
            </a>
        <!-- ini buat bek en -->
    </div>
</header>