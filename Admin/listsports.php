<?php
// Panggil fail function
require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$sports = ambildata($condb, 'SELECT * FROM lsports');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciast Communnity | List Sports</title>
</head>

<body>
<?php require_once 'header.php';?>
    <h1>List Sports</h1>

    <a href="addsports.php" style="text-decoration: none; color:white;"><button class="btn btn-primary">Add Sports</button></a>
    <br><br>

    <a href="tblsports.php" style="text-decoration: none; color:white;"><button class="btn btn-primary">Sports Table</button></a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Category</th>
            <th>Sports</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($sports as $row) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $row['category'] ?>
                </td>
                <td>
                    <?= $row['sports'] ?>
                </td>
                <td>
                    <a href="esports.php"><img width="25px" src="../img/edit.png"></a>
                    <a href="dltsports.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['sports']?>?');"><img width="25px" src="../img/delete.png"></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>