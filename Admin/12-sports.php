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
    <title>Sports</title>
</head>
<body>
<?php require_once 'header.php'?>

    <h1>CIAST SPORTS</h1>

    <form action="" method="post">

    



    </form>




</body>
</html>