<?php
// Panggil fail function
require_once 'functions.php';

// session_start();

// if (!isset($_SESSION['submit'])) {
//     header('Location: 1-adminlogin.php');
//     exit;
// }

$menu = ambildata($condb, 'SELECT * FROM m1');

// Fetch distinct meal categories from the m1 table
$categories_query = ambildata($condb, 'SELECT DISTINCT category FROM m1');
$categories = array_column($categories_query, 'category');

// Define the days of the week
$days_of_week = ['Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu', 'Ahad'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin-bottom: 40px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
        
        .jadualmakanan {
        display: flex;
        justify-content: space-between;
        width: 100%;
        }

        .container-sm {
        width: 30%;
         }
    </style>
</head>

<body>
<?php require_once 'header.php'; ?>

    <table class="table table-bordered border-secondary">
        
        
        
    <tr class="table-dark">
        
          <th>HARI / MASA</th>
          <?php foreach ($categories as $category) : ?>
                    <th><?= $category ?></th>
        <?php endforeach; ?>      
        </tr>
        

        <?php foreach ($days_of_week as $day) : ?>
        <tr>
        
        <td><?= $day ?></td>

          <td></td>


        </tr>
        <?php endforeach; ?>

      </table>




</body>
</html>