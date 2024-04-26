
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

    if (sports($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Your Post has Been Updated!'); 
            document.location.href = '13-sportspost.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Your Post Failed to Updated!');    
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
    <title>Sports</title>
</head>

<body>
<?php require_once 'header.php';?>

<h1>CIAST SPORTS</h1>

<button class="btn btn-primary"><a href="13-sportspost.php" style="text-decoration: none; color:white;">View Sports Post</a></button>

<button id="printPageButton" class="btn btn-primary" onclick="window.print()">
    <i class="fas fa-print"></i> Print
</button>

<form action="" method="post" class="row" enctype="multipart/form-data">

<div class="mb-3">
    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" id="gambar">
</div>

<div class="mb-3">
  <label for="comments" class="form-label">Comments</label>
  <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
</div>

<button type="submit" name="submit" class="btn btn-success">Save and Post</button>
<br>
<button type="button" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Are You Sure to Discard Your Report');">Discard</button>
</form> 


</body>
</html>