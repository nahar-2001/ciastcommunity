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
$lmenu = ambildata($condb, "SELECT * FROM lmenu WHERE id = $id")[0];

$category = $lmenu['category'];
$menu = $lmenu['menu'];


// Cek jika butang submit telah ditekan
if (isset($_POST['submit'])) {

    // Cek status edit/ update menu
    if (editmenu($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Data menu berjaya dikemas kini!'); 
            document.location.href = 'listmenu.php';   
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
    <title>Edit Menu</title>
</head>

<body>
    <?php require_once 'header.php'; ?>

    <h1>Edit Menu</h1>

    <a href="listmenu.php" style="text-decoration: none; color:white"><button class="btn btn-primary">Senarai menu</button></a>
    <br><br>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $id; ?>">
        <!-- <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $gambar; ?>"> -->
        <ul>
            <li>
                <label for="category">Category:</label><br>
                <!-- <input type="text" name="category" id="category" required value="<?= $category ?>"> -->
                <select name="category" id="category" class="form-select" aria-label="Default select example" required value="<?= $category ?>">
                    <option selected>Select The Menu</option>
                    <option value="sarapan">Sarapan</option>
                    <option value="tengahhari">Tengahhari</option>
                    <option value="petang">Petang</option>
                    <option value="malam">Malam</option>
                </select>
            </li>
            <br>
            <li>
                <label for="menu">Menu:</label><br>
                <!-- <input type="text" name="menu" id="menu" required value="<?= $menu ?>"> -->
                <textarea name="menu" id="menu" cols="30" rows="10"><?= $menu ?></textarea>
            </li>
            <br>
            <button type="submit" name="submit">Update</button>
        </ul>
    </form>

</body>

</html>