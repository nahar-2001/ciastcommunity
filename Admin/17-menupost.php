<?php 

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$menu = ambildata($condb, 'SELECT * FROM menu');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Post</title>

</head>
<body>

<?php require_once 'header.php';?>


<h1>MENU POST</h1>

<button class="btn btn-primary"><a href="16-menu.php" style="text-decoration: none; color:white;">Add Menu Post</a></button>

    <form action="" method="post">

    <table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Picture</th>
    <th>Comments</th>
    <th>Settings</th>
</tr>

<?php $i = 1; ?>
<?php foreach ($menu as $row) : ?>
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
            <a href="18-deletemenu.php?id=<?= $row['id'] ?>" onclick="return confirm('Are You Sure To Delete This Post!!! ?');"><img width="25px" src="../img/delete.png"></a>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>

</table>


    </form>
</body>
</html>