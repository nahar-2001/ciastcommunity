<?php 
require_once 'functions.php';

session_start();

if(!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

$sports = ambildata($condb, "SELECT * FROM sports WHERE id = $id")[0];

$gambar = $sports['gambar'];
$comments = $sports['comments'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sports Post</title>
</head>
<body>
<?php require_once 'header.php';?>

    <h1>EDIT SPORTS POST</h1>

    <button class="btn btn-primary"><a href="13-sportspost.php" style="text-decoration: none; color:white;">Back To Sports Post</a></button>
    <br><br>

    <ul>
            <li>
                <label for="gambar">Gambar:</label><br>
                <img src="../img/<?= $sports['gambar'] ?>" width="75px" alt=""><br>
            </li>
            <br>
            <li>
                <label for="comments">Comments:</label><br>
                <?= $sports['comments'] ?><br>
            </li>
        </ul>



    </form>
</body>
</html>