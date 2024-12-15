<?php
session_start(); // Ensure session is started

// Check if the user is logged in
$isLoggedIn = isset($_SESSION["id"]); // Assuming "id" is set when the user logs in
?>

<header>
    <div id="logo"></div>
    <nav id="navigasi">
        <a href="home.php" id="nav-home">Home</a>
        <a href="destination.php" id="nav-dest">Destination</a>
        <a href="about.php" id="nav-abt">About</a>
    </nav>
    <div class="nav-btn">
        <!-- Search functionality -->
        <div id="search">
            <?php if ($isFocused): ?>
                <form action="pencarian.php" method="POST">
                    <input type="text" id="search-field" name="keyword" onblur="gakFokus()">
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

        <!-- Show Daftar and Masuk buttons only if the user is not logged in -->
        <?php if (!$isLoggedIn): ?>
            <a href="register.php" id="daftar-btn">
                <div class="daftar-logo"></div>
                <span>Daftar</span>
            </a>
            <a href="login.php" id="masuk-btn">
                <div class="masuk-logo"></div>
                <span>Masuk</span>
            </a>
        <?php endif; ?>
    </div>
</header>