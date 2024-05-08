<?php
require_once 'functions.php';

// Fetch menu data from the database
$menu = ambildata($condb, 'SELECT m4.hari, m4.category, lmenu.menu 
                             FROM m4 
                             INNER JOIN lmenu ON m4.idmenu = lmenu.id');

// Initialize arrays to store menu data for each day and meal category
$menu_data = array();

// Loop through the menu data to organize it by day and meal category
foreach ($menu as $item) {
  $hari = $item['hari'];
  $category = strtolower($item['category']);
  $menu_item = $item['menu'];

  // Store the menu item in the respective day and meal category array
  $menu_data[$hari][$category] = $menu_item;
}
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

    table {
      text-align: center;
    }

    td,
    td {
      padding: 20px;
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

<?php require_once 'header.php';?>

  <div style="background-color:#e5e5e5;padding:15px;text-align:center;">
    <h1>MENU MAKAN & MINUM DI DEWAN MAKAN</h1>
  </div>

  <div style="overflow:auto">
    <div class="menu">
      <a href="tblmenu1.php">MINGGU 1</a>
      <a href="tblmenu2.php">MINGGU 2</a>
      <a href="tblmenu3.php">MINGGU 3</a>
      <a href="tblmenu4.php">MINGGU 4</a>
    </div>

    <div class="main">
      <h2>*MINGGU 4*</h2>
      <p>SILA PATUHI ARAHAN DAN PERATURAN SEMASA DI DEWAN MAKAN.</p>

      <!-- Display the menu table -->
      <table style="width: 100%;">
        <colgroup>
          <col span="1" style="background-color: white">
          <col span="3" style="background-color: white">
        </colgroup>
        <tr>
          <th>HARI / MASA</th>
          <th>SARAPAN</th>
          <th>MAKAN TENGAHHARI</th>
          <th>MINUM PETANG</th>
          <th>MAKAN MALAM</th>
        </tr>
        <?php
        // Define the meal categories
        $categories = ['sarapan', 'tengahhari', 'petang', 'malam'];

        // Loop through each day of the week
        foreach ($menu_data as $day => $meals) {
          echo "<tr>";
          echo "<td><b>$day</b></td>";

          // Loop through each meal category
          foreach ($categories as $category) {
            // Check if the menu data for this day and meal category exists
            if (isset($meals[$category])) {
              // Display the menu item
              echo "<td>{$meals[$category]}</td>";
            } else {
              // If no menu data exists, display an empty cell
              echo "<td></td>";
            }
          }
          echo "</tr>";
        }
        ?>
      </table>
      
    </div>
    <button class="btn btn-primary" onclick="printPage()">Print</button></div>

  <script>
    function printPage() {
      window.print();
    }
  </script>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>