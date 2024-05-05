<?php

require_once 'functions.php';


$query1 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Sarapan'");
$query2 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Tengahhari'");
$query3 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Petang'");
$query4 = ambildata($condb, "SELECT * FROM lmenu WHERE category = 'Malam'");


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
    <h1>View Table</h1>
    <button class="btn btn-primary"><a href="" style="text-decoration: none; color:white">Back To News</a></button>
    <br><br>



    <div class="jadualmakanan">
    <div class="container-sm" style="width: 30%;">
        <label for="Sarapan">Sarapan</label>
        <table class="table table-bordered border-secondary">
            <tr class="table-dark">
                <th>No.</th>
                <th>Menu</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($query1 as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['menu'] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    

    
    <div class="container-sm" style="width: 30%;">
    <label for="Tengahhari">Tengahhari</label>
    <table class="table table-bordered border-secondary">
            <tr class="table-dark">
            <th>No.</th>
            <th>Menu</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($query2 as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['menu'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    




    <div class="container-sm" style="width: 30%;">
    <label for="Petang">Petang</label>
    <table class="table table-bordered border-secondary">
            <tr class="table-dark">
            <th>No.</th>
            <th>Menu</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($query3 as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['menu'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>


    <div class="container-sm" style="width: 30%;">
    <label for="Malam">Malam</label>
    <table class="table table-bordered border-secondary">
            <tr class="table-dark">
            <th>No.</th>
            <th>Menu</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($query4 as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['menu'] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    </div>



    <form action="" method="post">

            





    </form>



    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
