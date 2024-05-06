<?php 
require_once 'functions.php';

session_start();

if(!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

$menu = ambildata($condb, "SELECT * FROM menu WHERE id = $id");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu Post</title>
</head>
<body>
<?php require_once 'header.php';?>

    <h1>EDIT MENU POST</h1>

    <button class="btn btn-primary"><a href="17-menupost.php" style="text-decoration: none; color:white;">Back To Menu Post</a></button>
    <br><br>

    <?php foreach ($menu as $row) : ?>
        <div class="container-fluid d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="../img/<?= $row['gambar'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['comments'] ?></h5>
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