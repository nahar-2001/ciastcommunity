<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$sports = ambildata($condb, 'SELECT * FROM sports');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Post</title>
</head>

<body>

    <?php require_once 'header.php'; ?>


    <h1>SPORTS POST</h1>

    <button class="btn btn-primary"><a href="12-sports.php" style="text-decoration: none; color:white;">Add Sports Post</a></button>
    <br><br>

    <button id="printPageButton" class="btn btn-primary" onclick="window.print()">
        <i class="fas fa-print"></i> Print
    </button>
    <br><br>


    <form action="" method="post">

        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Picture</th>
                <th>Comments</th>
                <th>Settings</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($sports as $row) : ?>
                <!-- <?php var_dump($row); ?> -->
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td><img src="../img/<?= $row['gambar']; ?>" width="45px"></td>
                    <td>
                        <?= $row['comments'] ?>
                    </td>
                    <td>
                        <a href="14-editsports.php?id=<?= $row['id'] ?>"><img width="25px" src="../img/edit.png"></a>
                        <a href="15-deletesports.php?id=<?= $row['id'] ?>" onclick="return confirm('Are You Sure To Delete This Post!!! ?');"><img width="25px" src="../img/delete.png"></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>


    </form>
</body>

</html>