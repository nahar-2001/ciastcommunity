<?php 

require_once '../config.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

if (isset($_POST['submit'])) {

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REPORT</h1>

<form action="" method="post" class="row" enctype="multipart/form-data">

<div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Post Title</label>
                                    <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
                                 </div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Category</label>
    <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
    <option value="">Select Category </option>
    </select>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Sub Category</label>
    <select class="form-control" name="subcategory" id="subcategory" required></select> 
</div>
<div class="row">
     <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
            <textarea class="summernote" name="postdescription" required></textarea>
        </div>
    </div>
</div>
<div>
    <h4><b>Feature Images</b></h4>
    <input type="file" class="form-control" name="postimage" id="postimage" required>
</div>

<button type="submit" name="submit" class="btn btn-customn waves-effect waves-light btn-md">Save and Post</button>
<br>
<button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
</form>    

</body>
</html>