<?php

session_start();

require_once 'userfunctions.php';

if (!isset($_SESSION['login'])) {
    header('Location: userlogin.php');
    exit;
}

$reports = ambildata($condb, "SELECT * FROM reports");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../navbar/main.css">
</head>

<body>
    <div id="main">
        <div class="container">
            <div style="margin-top:11px;margin-bottom:30px;text-align:center;">
                <img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" style="width: 100px;margin-bottom:15px">
                <h1>WELCOME TO CIAST COMMUNITY</h1>
            </div>
            <nav>
                <div class="nav-fostrap">
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="3-menu.php">Menu Dewan Makan</a></li>
                        <li><a href="javascript:void(0)">Aktiviti Umum<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="2-aktivitimingguan.php">Aktiviti Mingguan</a></li>
                                <li><a href="1-aktivitiumum.php">Laporan Aktiviti</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Sukan<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="4-sports.php">Jadual Mingguan</a></li>
                            </ul>
                        </li>
                        <li><a href="../navbar/About.php">About</a></li>
                        <li><a href="../navbar/contact.php">Contact</a></li>
                        <li><a href="userlogout.php" onclick="return confirm('Are You Sure???');">Log Out</a></li>
                    </ul>
                </div>
                <div class="nav-bg-fostrap">
                    <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
                    <a href="" class="title-mobile">Fostrap</a>
                </div>
            </nav>
            <div class='content'>
            </div>
        </div>
    </div>

    <?php foreach ($reports as $row) : ?>
        <!-- <div class="container-fluid d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="../img/<?= $row['gambar'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <img src="../img/<?= $row['gambar2'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['ptitle'] ?></h5>
                            <p class="card-text"><?= $row['pdetails'] ?></p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container-fluid d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="../img/<?= $row['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $row['ptitle'] ?></h5>
                <a href="1-aktivitiumum.php" class="btn btn-primary">Lihat Selanjutnya</a>
            </div>
        </div>
        </div>

    <?php endforeach; ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="main.js"></script>
</body>

</html>