<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"></div>
            <div class="user">
                <img src="../images/profile-pic-admin.png" alt="User  Avatar" width="40" height="40">
                <span>Admin</span>
            </div>
            <a href="logout.php" id="logout-btn">
                <div class="logout-logo"></div>
                <span>Keluar</span>
            </a>
        </div>
        <div class="content">
            <div class="sidebar">
                <ul class="sidebar-list">
                    <a href="admin.html"><li class="sidebar-item" id="">Dashboard</li></a>
                    <a href="edit.php"><li class="sidebar-item">Edit Akun</li></a>
                    <a href="pengguna terdaftar.php"><li class="sidebar-item">Pengguna Terdaftar</li></a>
                    <a href="postingan.php"><li class="sidebar-item">Postingan</li></a>
                </ul>
            </div>
            <div class="main">
                <div class="card-container">
                    <div class="card">
                        <div class="icon">
                          <img src="../images/users.png" alt="Pengguna Icon">
                        </div>
                        <div class="text">
                          <div class="title">Pengguna</div>
                          <p>4</p>
                        </div>
                    </div>
                    <div class="card">
                            <div class="icon">
                              <img src="../images/posts.png" alt="post Icon">
                            </div>
                            <div class="text">
                                <div class="title">Postingan</div>
                              <p>3</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>                          
    </div>
</body>
</html>
