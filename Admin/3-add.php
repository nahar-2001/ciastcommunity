<?php

// Panggil fail function
require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

// Cek jika butang submit telah ditekan
if (isset($_POST['submit'])) {

    // Cek status daftar pelajar
    if (daftar($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Data pelajar berjaya didaftar!'); 
            document.location.href = '4-list.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data pelajar gagal didaftar!');    
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelajar</title>
</head>

<body>
    <?php require_once 'header.php'; ?>

    <h1>Daftar Pelajar</h1>

    <button class="btn btn-primary"><a href="4-list.php" style="text-decoration: none; color:white;">Senarai Pelajar</a></button>
    <br><br>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group col-md-6">
            <label for="fname">First Name:</label>
            <input type="fname" class="form-control" id="fname" name="fname" placeholder="Enter fname" required>
        </div>
        <br>

        <div class="form-group col-md-6">
            <label for="lname">Last Name:</label>
            <input type="lname" class="form-control" id="lname" name="lname" placeholder="Enter lname" required>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="ndp">No. Daftar Pelajar:</label>
            <input type="ndp" class="form-control" id="ndp" name="ndp" placeholder="Enter ndp" required>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="nokp">No. Kad Pengenalan:</label>
            <input type="nokp" class="form-control" id="nokp" name="nokp" placeholder="Enter nokp" required>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="phone">No. Telefon:</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="kursus">Kursus:</label><br>
            <select name="kursus" id="kursus" class="form-select" aria-label="Default select example">
                <option selected>Select Course</option>
                <option value="Tvet-I">Tvet-I</option>
                <option value="DPV Aotumotif">DPV Aotumotif</option>
                <option value="DPV Elektronik">DPV Elektronik</option>
                <option value="DPV Kimpalan">DPV Kimpalan</option>
                <option value="DPV Mekatronik">DPV Mekatronik</option>
                <option value="DPV Pengeluaran">DPV Pengeluaran</option>
                <option value="DPV Sistem Komputer">DPV Sistem Komputer</option>
                <option value="DLPV Automotif">DLPV Automotif</option>
                <option value="DLPV Elektronik">DLPV Elektronik</option>
                <option value="DLPV Kimpalan">DLPV Kimpalan</option>
                <option value="DLPV Mekatronik">DLPV Mekatronik</option>
                <option value="DLPV Pengeluaran">DLPV Pengeluaran</option>
                <option value="DLPV Sistem Komputer">DLPV Sistem Komputer</option>
                <option value="DLPV Keselamatan Siber">DLPV Keselamatan Siber</option>
            </select>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="gambar">Gambar:</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <br><br>
        <div class="form-group">

            <div class="col-md-12">

                <button type="submit" name="submit" id="submit" class="btn btn-success">Daftar</button>

            </div>
        </div>
        <br>
    </form>

</body>

</html>