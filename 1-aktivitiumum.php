<?php

require_once 'userfunctions.php';


$reports = ambildata($condb, "SELECT * FROM reports");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>AKTIVITI UMUM</h1>
<body>
    <?php foreach ($reports as $row) : ?>
        <div class="container-fluid d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="img/<?= $row['gambar'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <img src="img/<?= $row['gambar2'] ?>" style="max-width: 700px;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <br>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['ptitle'] ?></h5>
                            <p class="card-text"><?= $row['pdetails'] ?></p>
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

</html>