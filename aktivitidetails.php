<?php

require_once 'userfunctions.php';

$id = $_GET['id'];

$news = ambildata($condb, "SELECT * FROM reports WHERE id = $id");

// $ptitle = $news['ptitle'];
// $pdetails = $news['pdetails'];
// $gambar = $news['gambar'];
// $gambar2 = $news['gambar2'];

// var_dump($news);
// die;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="index.php">Welcome To Ciast Community</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="1-aktivitiumum.php">Laporan Aktiviti</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dewan Makan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="infodm.php">Info Dewan Makan</a></li>
                                <li><a class="dropdown-item" href="tablemenu1.php">Jadual Makan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sukan CIAST
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="infosukan.php">Info Sukan</a></li>
                                <li><a class="dropdown-item" href="tablesports.php">Jadual Sukan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="contactus.php">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <a href="Admin/1-adminlogin.php"><button type="button" class="btn btn-primary">Admin</button></a>
            <button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <br><br><br><br>

    <h1 class="container text-center text-bg-dark rounded-pill">AKTIVITI UMUM</h1>

    <?php foreach ($news as $row) : ?>
        <div class="container-fluid d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="img/<?= $row['gambar']; ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <img src="img/<?= $row['gambar2']; ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['ptitle']; ?></h5>
                            <p class="card-text"><?= $row['pdetails']; ?></p>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="align-items-center d-flex justify-content-center">
        <button class="btn btn-primary" onclick="printPage()">Print</button></div><br>
        
    <?php endforeach; ?>

    <script>
        function printPage() {
            window.print();
        }
    </script>
    <br>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>