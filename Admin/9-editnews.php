<?php 
require_once '../functions.php';

session_start();

if(!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

$news = ambildata($condb, "SELECT * FROM reports WHERE id = $id")[0];

$ptitle = $news['ptitle'];
$pdetails = $news['pdetails'];
$gambar = $news['gambar'];

if (isset($_POST['submit'])) {

    // Cek status edit/ update pelajar
    if (edit($condb, $_POST) > 0) {
        echo "
        <script>
            alert('News has been updated!'); 
            document.location.href = '7-viewnews.php';   
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
    <title>Edit News</title>
</head>
<body>
<?php require_once 'header.php'; ?>

    <h1>Edit News</h1>

    <a href="7-viewnews.php">Back To View News</a>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
    <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $gambar; ?>">

    <ul>
            <li>
                <label for="gambar">Gambar:</label><br>
                <img src="../img/<?= $gambar ?>" width="75px" alt=""><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <label for="ptitle">News Title:</label><br>
                <input type="text" name="ptitle" id="ptitle" required value="<?= $ptitle ?>">
            </li>
            <br>
            <li>
                <label for="pdetails">News Details:</label><br>
                <input type="text" name="pdetails" id="pdetails" required value="<?= $pdetails ?>">
            </li>
            <br>
            <button type="submit" name="submit">Update</button>
        </ul>



    </form>
</body>
</html>