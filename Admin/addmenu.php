<?php

require_once 'functions.php';

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if (addmenu($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Your Menu has Been Added!'); 
            document.location.href = 'listmenu.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Your Menu Failed to Added!');    
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
    <title>Add Menu</title>
</head>
<body>
<?php require_once 'header.php';?>
<h1>Add Menu</h1>

<button class="btn btn-primary"><a href="listmenu.php" style="text-decoration: none; color:white;">List Menu</a></button>
<br><br>
<button class="btn btn-primary"><a href="tblmenu1.php" style="text-decoration: none; color:white;">Table Menu</a></button>
<br><br>

<form action="" method="POST" enctype="multipart/form-data">
   
<select name="cmenu" id="cmenu" class="form-select" aria-label="Default select example">
  <option selected>Select The Menu</option>
  <option value="sarapan">Sarapan</option>
  <option value="tengahhari">Tengahhari</option>
  <option value="petang">Petang</option>
  <option value="malam">Malam</option>
</select>

<div class="mb-3">
  <label for="menu" class="form-label">Menu</label>
  <textarea class="form-control" name="menu" id="menu" rows="3"></textarea>
</div>

<button type="submit" name="submit" class="btn btn-success">Add Menu</button>





</form>





</body>
</html>