<?php
// Panggil fail function
require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$admin = ambildata($condb, 'SELECT * FROM adminlogin');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciast Community | Admin List</title>
</head>

<body>
<?php require_once 'header.php';?>
    <h1>Admin List</h1>

    <button class="btn btn-primary"><a href="subadmin.php" style="text-decoration: none; color:white;">Add Admin</a></button>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Admin</th>
            <th>Tetapan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($admin as $row) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $row['username'] ?>
                </td>
                <td>
                    <a href="deleteadmin.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['username'] ?>?');"><img width="25px" src="../img/delete.png"></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>