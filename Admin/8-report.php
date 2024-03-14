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

    <form action="" method="post" enctype="multipart/form-data">
    <div>
        <p><label for="title">Title</label></p>
        <textarea name="title" id="title" cols="30" rows="10"></textarea>          
    </div>
    <div>
        <p><label for="reports">Write Your Reports</label></p>
        <textarea name="reports" id="reports" cols="30" rows="10"></textarea>
    </div>
    <div>
        <p><label for="reports">Conclusion</label></p>
        <textarea name="reports" id="reports" cols="30" rows="10"></textarea>
    </div>
    <div>
        <p><label for="gambar">Gambar</label></p>
        <input type="file" name="gambar" id="gambar">
    </div>

    <br>    
    <br>
    <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>