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
</head>
<body>
<?php foreach ($reports as $row) : ?>
    <div class="container-fluid d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="../img/<?= $row['gambar'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                </div>
                <br>
                <div class="col-md-6">
                    <img src="../img/<?= $row['gambar2'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                </div>
                <br>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['ptitle'] ?></h5>
                        <p class="card-text"><?= $row['pdetails'] ?></p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php endforeach; ?>
</body>
</html>
