<?php 

$query = "SELECT menu FROM lmenu WHERE id = ";


?>

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
      .menu,
      .main,
      .right {
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
      <a href="tablemenu1.php">MINGGU 1</a>
      <a href="tablemenu2.php">MINGGU 2</a>
      <a href="tablemenu3.php">MINGGU 3</a>
      <a href="tablemenu4.php">MINGGU 4</a>
    </div>

    <div class="main">
      <h2>*PERINGATAN BERSAMA*</h2>
      <p>SILA PATUHI ARAHAN DAN PERATURAN SEMASA DI DEWAN MAKAN.</p>
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