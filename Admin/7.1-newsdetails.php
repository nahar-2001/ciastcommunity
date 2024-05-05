<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

$news = ambildata($condb, "SELECT * FROM reports WHERE id = $id");


?>



<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
</head>
<body>
<?php require_once 'header.php';?>
   


<?php foreach ($news as $row) : ?>
        <div class="container-fluid d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="../img/<?= $row['gambar'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <img src="../img/<?= $row['gambar2'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['ptitle'] ?></h5>
                            <p class="card-text"><?= $row['pdetails'] ?></p>
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

</body>
</html>
