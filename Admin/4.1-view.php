<?php 

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

// Ambil maklumat pelajar dari database menggunakan $id
$pelajar = ambildata($condb, "SELECT * FROM pelajar WHERE id = $id")[0];

$fname = $pelajar['fname'];
$lname = $pelajar['lname'];
$nokp = $pelajar['nokp'];
$ndp = $pelajar['ndp'];
$email = $pelajar['email'];
$kursus = $pelajar['kursus'];
$gambar = $pelajar['gambar'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<li><img src="../img/<?= $pelajar['gambar']; ?>" width="100px"></li>
<br><br>
<li><?= $pelajar['fname'] . ' ' . $pelajar['lname'] ?></li>
<br><br>
<li><?= $pelajar['nokp'] ?></li>
<br><br>
<li><?= $pelajar['ndp'] ?></li>
<br><br>
<li><?= $pelajar['email'] ?></li>
<br><br>
<li><?= $pelajar['kursus'] ?></li>
</ul>




</body>
</html>