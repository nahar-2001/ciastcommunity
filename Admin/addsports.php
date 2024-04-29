<?php

require_once 'functions.php';

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if (addsports($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Your Sports has Been Added!'); 
            document.location.href = 'listsports.php';   
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Your Sports Failed to Added!');    
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

<a href="listsports.php" style="text-decoration: none; color:white;"><button class="btn btn-primary">Sports List</button></a>
<br><br>
<a href="tblsports.php" style="text-decoration: none; color:white;"><button class="btn btn-primary">Sports Table</button></a>
<br><br>

<form action="" method="POST" enctype="multipart/form-data">
   
<select name="category" id="category" class="form-select" aria-label="Default select example">
  <option selected>Select Option</option>
  <option value="lelaki">Pelajar Lelaki</option>
  <option value="perempuan">Pelajar Perempuan</option>
  <option value="staff">Staff CIAST</option>
</select>

<div class="mb-3">
  <label for="sports" class="form-label">Sports</label>
  <textarea class="form-control" name="sports" id="sports" rows="3"></textarea>
</div>

<button type="submit" name="submit" class="btn btn-success">Add Sports</button>





</form>





</body>
</html>