<?php
require_once "../config.php";

$pelajar = ambildata($condb, 'SELECT * FROM pelajar');

?>



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    margin: 0;
  }

  .icon-bar {
    width: 100%;
    background-color: #555;
    overflow: auto;
  }

  .icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 36px;
  }

  .icon-bar a:hover {
    background-color: #000;
  }

  .active {
    background-color: #04AA6D;
  }
</style>

<body>

  <div class="icon-bar">
    <a class="active" href="admindashboard.php">Home<i class="fa fa-home"></i></a>
    <a class="active" href="profile.php">Profile<i class="fa fa-search"></i></a>
    <a href="#">Message<i class="fa fa-envelope"></i></a>
    <a href="#">Logout<i class="fa fa-globe"></i></a>
  </div>

</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Welcome Admin</h1>

  <body>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NDP</th>
        <th>Email</th>
        <th>Kursus</th>
        <th>Tetapan</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach ($pelajar as $row) : ?>
        <tr>
          <td>
            <?= $i; ?>
          </td>
          <td><img src="../img/<?= $row['gambar']; ?>" width="45px"></td>
          <td>
            <?= $row['ndp'] ?>
          </td>
          <td>
            <?= $row['fname'] . ' ' . $row['lname'] ?>
          </td>
          <td>
            <?= $row['email'] ?>
          </td>
          <td>
            <?= $row['kursus'] ?>
          </td>
          <td>
            <a href="4_edit.php?id=<?= $row['id'] ?>"><img width="25px" src="../img/edit.png"></a>
            <a href="3_delete.php?id=<?= $row['id'] ?>"><img width="25px" src="../img/delete.png"></a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>

    </table>
  </body>
  <p><a href="adminlogin.php">Logout</a></p>
</body>

</html>