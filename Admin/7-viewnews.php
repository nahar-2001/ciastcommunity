<?php

require_once 'functions.php';

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
    <title>View News</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php require_once 'header.php'; ?>


    <h1>VIEW NEWS</h1>

    <button class="btn btn-primary"><a href="8-news.php" style="text-decoration: none; color:white">Back To News</a></button>
    <br><br>

   

    <form action="" method="post">

        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Post Title</th>
                <th>Post Details</th>
                <th>Picture</th>
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
                    <td><img src="../img/<?= $row['gambar2']; ?>" width="45px"></td>
                    <td>
                        <a href="7.1-newsdetails.php?id=<?= $row['id']?>"><span class="badge text-bg-primary">View</span></a>
                        <a href="9-editnews.php?id=<?= $row['id'] ?>"><span class="badge rounded-pill text-bg-success">Edit</span></a>
                        <a href="10-deletenews.php?id=<?= $row['id'] ?>" onclick="return confirm('Adakah anda yakin untuk memadam data <?= $row['ptitle'] ?>?');"><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>


    </form>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>