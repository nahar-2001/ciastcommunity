<?php

// Panggil fail function
require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

// Cek jika butang submit telah ditekan
if (isset($_POST['submit'])) {

    // Cek status daftar pelajar
    if (daftar($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Data pelajar berjaya didaftar!'); 
            document.location.href = '4-list.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data pelajar gagal didaftar!');    
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelajar</title>
</head>

<body>
    <?php require_once 'header.php';?>
    
    <h1>Daftar Pelajar</h1>

    <button class="btn btn-primary"><a href="4-list.php" style="text-decoration: none; color:white;">Senarai Pelajar</a></button>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="fname">First Name:</label><br>
                <input type="text" name="fname" id="fname" required>
            </li>
            <br>
            <li>
                <label for="lname">Last Name:</label><br>
                <input type="text" name="lname" id="lname" required>
            </li>
            <br>
            <li>
                <label for="nokp">No KP:</label><br>
                <input type="text" name="nokp" id="nokp" required>
            </li>
            <br>
            <li>
                <label for="ndp">NDP:</label><br>
                <input type="text" name="ndp" id="ndp" required>
            </li>
            <br>
            <li>
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" required>
            </li>
            <br>
            <li>
                <label for="kursus">Kursus:</label><br>
                <input type="text" name="kursus" id="kursus" required>
            </li>
            <br>
            <li>
                <label for="gambar">Gambar:</label><br>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <br>
            <button type="submit" name="submit">Daftar</button>
        </ul>
    </form>

</body>

</html>