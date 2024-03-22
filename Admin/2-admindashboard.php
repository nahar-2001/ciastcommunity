<?php 
session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once 'header.php'?>
<h1>Welcome Admin</h1>

<p><a href="3-add.php">Students Register</a></p>
<p><a href="4-list.php">Students List</a></p>
<p><a href="8-news.php">News</a></p>
<p><a href="9-menu.php">Menu</a></p>
<p><a href="10-sports.php">Sports</a></p>
</body>
</html>

    
