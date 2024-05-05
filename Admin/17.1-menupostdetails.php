<?php 
require_once 'functions.php';

session_start();

if(!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

$menu = ambildata($condb, "SELECT * FROM menu WHERE id = $id")[0];

$gambar = $menu['gambar'];
$comments = $menu['comments'];

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

    <ul>
            <li>
                <label for="gambar">Gambar:</label><br>
                <img src="../img/<?= $menu['gambar'] ?>" width="75px" alt=""><br>
            </li>
            <br>
            <li>
                <label for="comments">Comments:</label><br>
                <?= $menu['comments'] ?><br>
            </li>
        </ul>



    </form>
</body>
</html>