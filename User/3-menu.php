<?php

session_start();

require_once 'userfunctions.php';

if (!isset($_SESSION['login'])) {
    header('Location: userlogin.php');
    exit;
}

$menu = ambildata($condb, "SELECT * FROM menu");


?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<h1>MENU DEWAN MAKAN</h1>
<body>
    <?php foreach ($menu as $row) : ?>
        <div class="container-fluid d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="../img/<?= $row['gambar'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['comments'] ?></h5>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" onclick="printPage()">Print</button>
    <?php endforeach; ?>

    <script>
        function printPage() {
            window.print();
        }
    </script>
    <br>
</body>

</html> -->

<!DOCTYPE html> 
<html> 
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style> 
* { 
  box-sizing: border-box; 
} 
 
.menu { 
  float: left; 
  width: 20%; 
  text-align: center; 
} 
 
.menu a { 
  background-color: #e5e5e5; 
  padding: 8px; 
  margin-top: 7px; 
  display: block; 
  width: 100%; 
  color: black; 
} 
 
.main { 
  float: left; 
  width: 60%; 
  padding: 0 20px; 
} 
 
.right { 
  background-color: #e5e5e5; 
  float: left; 
  width: 20%; 
  padding: 15px; 
  margin-top: 7px; 
  text-align: center; 
} 
@media only screen and (max-width: 620px) { 
  /* For mobile phones: */ 
  .menu, .main, .right { 
    width: 100%; 
  } 
}
</style> 
</head> 
<body style="font-family:Verdana;color:#aaaaaa;"> 
 
<div style="background-color:#e5e5e5;padding:15px;text-align:center;"> 
  <h1>MENU MAKAN & MINUM DI DEWAN MAKAN</h1> 
</div> 
 
<div style="overflow:auto"> 
  <div class="menu"> 
    <a href="#">MINGGU 1</a> 
    <a href="#">MINGGU 2</a> 
    <a href="#">MINGGU 3</a> 
    <a href="#">MINGGU 4</a> 
  </div> 
 
  <div class="main"> 
    <h2>*PERINGATAN BERSAMA*</h2> 
    <p>SILA PATUHI ARAHAN DAN PERATURAN SEMASA DI DEWAN MAKAN.</p> 
    <!DOCTYPE html> 
<html> 
<head> 
<style> 
table, th, td { 
  border: 1px solid black; 
  border-collapse: collapse; 
} 

</style> 
</head> 
<body> 
 
<h2>MENU MAKAN & MINUM DI DEWAN MAKAN</h2> 
<p>MINGGU 1:</p> 
 
<table style="width: 100%;"> 
  <colgroup> 
    <col span="1" style="background-color: white "> 
    <col span="3" style="background-color: white"> 
  </colgroup> 
<tr> 
<th>HARI / MASA</th> 
<th>ISNIN</th> 
<th>SELASA</th> 
<th>RABU</th> 
<th>KHAMIS</th> 
<th>JUMAAT</th> 
<th>SABTU</th> 
<th>AHAD</th> 
</tr> 
<tr> 
<td><b>SARAPAN PAGI</td> 
  <td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
</tr> 
<tr> 
<td><b>MAKAN TENGAHARI</td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
</tr> 
<tr> 
<td><b>MINUM PETANG</td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
</tr> 
<tr> 
<td><b>MAKAN MALAM</td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
<td></td> 
</tr> 
</table> 
 
</body> 
</html> 
 
  </div> 
 
 
</body> 
</html>