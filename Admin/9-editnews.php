<?php 
require_once '../functions.php';

session_start();

if(!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
</head>
<body>
<?php require_once 'header.php'; ?>

    <h1>Edit News</h1>

    <a href="7-viewnews.php">Back To View News</a>

    <form action="" method="post" enctype="multipart/form-data">




    </form>
</body>
</html>