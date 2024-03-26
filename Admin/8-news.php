<?php 

require_once '../functions.php';

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
    <title>Report</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php require_once 'header.php'?>

<h1>REPORT</h1>

<a href="7-viewnews.php">View News</a>
<form action="" method="post" class="row" enctype="multipart/form-data">

<div class="mb-3">
  <label for="ptitle" class="form-label">News Title</label>
  <input type="text" class="form-control" name="ptitle" id="ptitle" required>
</div>

<div class="mb-3">
  <label for="pdetails" class="form-label">News Details</label>
  <textarea class="form-control" name="pdetails" id="pdetails" rows="3"></textarea>
</div>

<div>
    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" id="gambar" required>
</div>

<button type="submit" name="submit" class="btn btn-success">Save and Post</button>
<br>
<button type="button" class="btn btn-danger waves-effect waves-light" onclick="return confirm('Are You Sure to Discard Your Report');">Discard</button>
</form> 


</body>
</html>