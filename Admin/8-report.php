<?php 

require_once '../config.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

if (isset($_POST['submit'])) {
    if (reports($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Report has Been Updated!'); 
            document.location.href = '';   
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

<form action="" method="post" class="row" enctype="multipart/form-data">

<div class="mb-3">
  <label for="posttitle" class="form-label">Post Title</label>
  <input type="text" class="form-control" name="posttitle" id="posttitle" required>
</div>

<div class="mb-3">
  <label for="postdetails" class="form-label">Post Details</label>
  <textarea class="form-control" name="postdetails" id="postdetails" rows="3"></textarea>
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