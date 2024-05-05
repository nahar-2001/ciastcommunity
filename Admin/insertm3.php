<?php 

require_once 'functions.php';

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if (insertm3($condb, $_POST) > 0) {
        echo "
        <script>
            alert('Your Menu has Been Added!'); 
            document.location.href = 'insertm3.php';   
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
    <title>Insert M3</title>
</head>
<body>

<?php require_once 'header.php';?>

<h1>Insert M3</h1>

<button class="btn btn-primary"><a href="listmenu.php" style="text-decoration: none; color:white;">List Menu</a></button>
<br><br>
<button class="btn btn-primary"><a href="tblmenu1.php" style="text-decoration: none; color:white;">Table Menu</a></button>
<br><br>

<form action="" method="POST" enctype="multipart/form-data">

<select name="hari" id="hari" class="form-select" aria-label="Default select example">
  <option selected>Select Days</option>
  <option value="Isnin">Isnin</option>
  <option value="Selasa">Selasa</option>
  <option value="Rabu">Rabu</option>
  <option value="Khamis">Khamis</option>
  <option value="Jumaat">Jumaat</option>
  <option value="Sabtu">Sabtu</option>
  <option value="Ahad">Ahad</option>
</select>
<br><br>
   
<select name="category" id="category" class="form-select" aria-label="Default select example">
  <option selected>Select The Menu</option>
  <option value="Sarapan">Sarapan</option>
  <option value="Tengahhari">Tengahhari</option>
  <option value="Petang">Petang</option>
  <option value="Malam">Malam</option>
</select>
<br><br>


<button type="submit" name="submit" class="btn btn-success">Add Menu</button>





</form>
</body>
</html>