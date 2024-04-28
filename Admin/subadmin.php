<?php 

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}


if (isset($_POST['submit'])) {

    if(adminlog($condb, $_POST) > 0) {
        echo "<script>
            alert('Registration Successfull! Please Login To Continue');
            document.location.href = 'tblsubadmin.php';  
            </script>";
            
    } else {
        echo mysqli_error($condb);
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciast Community | Add Admin</title>
</head>

<body>
<?php require_once 'header.php';?>

<h1>Add Sub Admin</h1>
<br>

    <form action="" method="post">

        <div class="form-group col-md-6">
            <label for="username">Username:</label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Enter username" required>
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>
        <br><br>

        <div class="form-group">

            <div class="col-md-12">

                <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>

            </div>
        </div>

    </form>

</body>

</html>