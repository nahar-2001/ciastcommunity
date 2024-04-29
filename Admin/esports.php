<?php

// Panggil fail function
require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

// Ambil data id dari URL
$id = $_GET['id'];

// Ambil maklumat menu dari database menggunakan $id
$lsports = ambildata($condb, "SELECT * FROM lsports WHERE id = $id")[0];

$category = $lsports['category'];
$sports = $lsports['sports'];


// Cek jika butang submit telah ditekan
if (isset($_POST['submit'])) {

    // Cek status edit/ update menu
    if (esports($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Data sports berjaya dikemas kini!'); 
            document.location.href = 'listsports.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Tiada perubahan data dilakukan!');    
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
    <title>Edit Sports</title>
</head>

<body>
    <?php require_once 'header.php'; ?>

    <h1>Edit Menu</h1>

    <a href="listsports.php" style="text-decoration: none; color:white"><button class="btn btn-primary">Sports List</button></a>
    <br><br>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $id; ?>">
        
        <ul>
            <li>
                <label for="category">Category:</label><br>
                
                <select name="category" id="category" class="form-select" aria-label="Default select example" required value="<?= $category ?>">
                    <option selected>Select The Gender</option>
                    <option value="lelaki">Lelaki</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="staff">Staff CIAST</option>
                </select>
            </li>
            <br>
            <li>
                <label for="menu">Sports:</label><br>
                <textarea name="sports" id="sports" cols="30" rows="10"><?= $sports ?></textarea>
            </li>
            <br>
            <button type="submit" name="submit">Update</button>
        </ul>
    </form>

</body>

</html>