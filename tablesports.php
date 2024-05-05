<?php 

require_once 'userfunctions.php';

$sports = ambildata($condb, 'SELECT * FROM lsposrts')


?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CiastCommunity | Info Dewan Makan</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
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
      .menu,
      .main,
      .right {
        width: 100%;
      }
    }
  </style>
</head>

<body style="font-family:Verdana;color:#aaaaaa;">

<nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand me-auto" href="index.php">Welcome To Ciast Community</a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="1-aktivitiumum.php">Laporan Aktiviti</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dewan Makan
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="infodm.php">Info Dewan Makan</a></li>
                    <li><a class="dropdown-item" href="tablemenu1.php">Jadual Makan</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sukan CIAST
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="infosukan.php">Info Sukan</a></li>
                    <li><a class="dropdown-item" href="tablesports.php">Jadual Sukan</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="contactus.php">Contact Us</a>
                </li>

              </ul>
            </div>
          </div>
          <a href="Admin/1-adminlogin.php"><button type="button" class="btn btn-primary">Admin</button></a>
          <button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <br><br><br><br>


  <div style="background-color:#e5e5e5;padding:15px;text-align:center;">
    <h1>JADUAL SUKAN CIAST</h1>
  </div>


  <div class="main">
    <h2>*PERINGATAN BERSAMA*</h2>
    <p>SILA PATUHI ARAHAN DAN PERATURAN.</p>
    <!DOCTYPE html>
    <html>

    <head>
      <style>
        table,
        th,
        td {
          border: 1px solid black;
          border-collapse: collapse;
        }
      </style>
    </head>

    <body>

     


      <h2>JADUAL BERSUKAN MINGGUAN</h2>


      <table style="width: 100%;">
        <colgroup>
          <col span="1" style="background-color: white ">
          <col span="3" style="background-color: white">
        </colgroup>
        <tr>
          <th>HARI / SUKAN</th>
          <th>ISNIN</th>
          <th>SELASA</th>
          <th>RABU</th>
          <th>KHAMIS</th>
          <th>JUMAAT</th>
          <th>SABTU</th>
          <th>AHAD</th>
        </tr>
        <tr>
          <td><b>FUTSAL</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
        </tr>
        <tr>
          <td><b>SEPAK TAKRAW</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
        </tr>
        <tr>
          <td><b>BOLA TAMPAR</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Perempuan</td>
        </tr>
        <tr>
          <td><b>TENNIS</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Perempuan</td>
          <td>Pelajar Lelaki</td>
          <td>Pelajar Lelaki</td>
          <td>Staff CIAST</td>
          <td>Staff CIAST</td>
        </tr>
        <td><b>PING PONG</td>
        <td>Pelajar Lelaki</td>
        <td>Pelajar Lelaki</td>
        <td>Pelajar Perempuan</td>
        <td>Pelajar Perempuan</td>
        <td>Staff CIAST</td>
        <td>Staff CIAST</td>
        <td>Staff CIAST</td>
        </tr>
        <td><b>BADMINTON</td>
        <td>Pelajar Lelaki</td>
        <td>Pelajar Lelaki</td>
        <td>Pelajar Perempuan</td>
        <td>Pelajar Perempuan</td>
        <td>Pelajar Perempuan</td>
        <td>Staff CIAST</td>
        <td>Staff CIAST</td>
        </tr>
        <td><b>GYM</td>
        <td>Pelajar Lelaki</td>
        <td>Pelajar Lelaki</td>
        <td>Pelajar Perempuan</td>
        <td>Pelajar Perempuan</td>
        <td>Pelajar Perempuan</td>
        <td>Staff CIAST</td>
        <td>Staff CIAST</td>
        </tr>
      </table>
      <button class="btn btn-primary" onclick="printPage()">Print</button>
    </body>

    </html>

  </div>

  <script>
    function printPage() {
      window.print();
    }
  </script>
 <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>