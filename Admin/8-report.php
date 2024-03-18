<?php 

require_once '../config.php';

session_start();

// if (!isset($_SESSION['submit'])) {
//     header('Location: 1-adminlogin.php');
//     exit;
// }

// if (isset($_POST['submit'])) {

// }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../summernote/summernote.min.css">
    <script src="//"></script>
</head>

<body>


    <h1>REPORT</h1>

<form action="" method="post" class="row" enctype="multipart/form-data">

<div>
    <label for="posttitle">Post Title</label>
    <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
 </div>

<div >
    <label for="postdetails">Post Details</label>
    <br>
    <textarea class="summernote" name="editordata" id="summernote" required></textarea>
</div>

<button type="submit" name="submit" class="btn btn-customn waves-effect waves-light btn-md">Save and Post</button>
<br>
<button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
</form> 

<script>
$(document).ready(function() {
$('#summernote').summernote();
});
</script>

</body>
</html>