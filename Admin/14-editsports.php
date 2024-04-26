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

if (isset($_POST['submit'])) {

    // Cek status edit/ update pelajar
    if (editsports($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Your Post Has Been Updated!'); 
            document.location.href = '13-sportspost.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Nothing Has Been Changed!');    
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
    <title>Edit Sports Post</title>
</head>
<body>
<?php require_once 'header.php';?>

    <h1>EDIT SPORTS POST</h1>

    <button class="btn btn-primary"><a href="13-sportspost.php" style="text-decoration: none; color:white;">Back To Sports Post</a></button>

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
                <label for="comments">Comments:</label><br>
                <input type="text" name="comments" id="comments" required value="<?= $comments ?>">
            </li>
            <br>
            <button type="submit" name="submit">Update</button>
        </ul>



    </form>
</body>
</html>