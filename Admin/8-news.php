<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if (news($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Report has Been Updated!'); 
            document.location.href = '7-viewnews.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Your Report Failed to Updated!');    
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
    <title>CIAST News</title>


</head>

<body>
    <?php require_once 'header.php'; ?>

    <h1>CIAST NEWS</h1>

    <button class="btn btn-primary"><a href="7-viewnews.php" style="text-decoration:none; color: white;">View News Post</a></button>
    <br><br>



    <form action="" method="post" class="row" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="ptitle" class="form-label">News Title</label>
            <input type="text" class="form-control" name="ptitle" id="ptitle" required>
        </div>
        <br>
        <div class="mb-3">
            <label for="pdetails" class="form-label">News Details</label>
            <textarea class="form-control" name="pdetails" id="pdetails" rows="3"></textarea>
        </div>
        <br>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <br>
        <div class="mb-3">
            <label for="gambar2">Gambar</label>
            <input type="file" class="form-control" name="gambar2" id="gambar2">
        </div>
        <br><br>

        <div class="form-group">

            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-success">Save and Post</button>
            </div>
        </div>

    </form>

</body>

</html>