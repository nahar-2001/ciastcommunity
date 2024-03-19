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
    <h1>MENU</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>Isnin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Khamis</th>
            <th>Jumaat</th>
            <th>Sabtu</th>
            <th>Ahad</th>
        </tr>
</body>
</html>