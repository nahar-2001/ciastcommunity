<?php
// Panggil fail function
require_once 'functions.php';

// session_start();

// if (!isset($_SESSION['submit'])) {
//     header('Location: 1-adminlogin.php');
//     exit;
// }

$menu = ambildata($condb, 'SELECT * FROM lmenu');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciast Communnity | List Menu</title>
</head>

<body>
<?php require_once 'header.php';?>
    <h1>List Menu</h1>

    <button class="btn btn-primary"><a href="addmenu.php" style="text-decoration: none; color:white;">Add Menu</a></button>
    <br><br>

    <button class="btn btn-primary"><a href="tablemenu1.php" style="text-decoration: none; color:white;">Table Menu</a></button>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Category</th>
            <th>Menu</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($menu as $row) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= $row['category'] ?>
                </td>
                <td>
                    <?= $row['menu'] ?>
                </td>
                <!-- <td>
                    <a href="5-edit.php?id=<?= $row['id'] ?>"><img width="25px" src="../img/edit.png"></a>
                    <a href="6-delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['fname'] . ' ' . $row['lname'] ?>?');"><img width="25px" src="../img/delete.png"></a>
                </td> -->
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>