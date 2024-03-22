<?php 

require_once '../functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$news = ambildata($condb, 'SELECT * FROM reports');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
</head>
<body>
<?php require_once 'header.php';?>


<h1>VIEW REPORT</h1>

<a href="8-news.php">Bact To News</a>

    <form action="" method="post">

    <table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Post Title</th>
    <th>Post Details</th>
    <th>Picture</th>
    <th>Settings</th>
</tr>

<?php $i = 1; ?>
<?php foreach ($news as $row) : ?>
    <!-- <?php var_dump($row); ?> -->
    <tr>
        <td>
            <?= $i; ?>
        </td>
        <td>
            <?= $row['ptitle'] ?>
        </td>
        <td>
            <?= $row['pdetails'] ?>
        </td>
        <td><img src="../img/<?= $row['gambar']; ?>" width="45px"></td>
        <td>
            <a href="9-editnews.php?id=<?= $row['id'] ?>"><img width="25px" src="../img/edit.png"></a>
            <a href="10-deletenews.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['ptitle'] ?>?');"><img width="25px" src="../img/delete.png"></a>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>

</table>


    </form>
</body>
</html>