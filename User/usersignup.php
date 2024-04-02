<?php 
require '../functions.php';

if (isset($_POST['signup'])) {

    if(register($condb, $_POST) > 0) {
        echo "<script>
            alert('Registration Successfull! Please Login To Continue');
            document.location.href = 'userlogin.php';  
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>User Sign Up</title>
</head>

<body class="bg-dark">
    

    <div class="container">
        <div class="card card-register mx-auto mt-5">
        <div class="card-header"><h1>Sign Up to Ciast Community</h1></div>
        <div class="card-body">

        <form action="" method="POST">
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="text" name="email" id="email" required>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" required>
                </div>
                <div class="col-md-6">
                <label for="password2">Confirm Password:</label><br>
                <input type="password" name="password2" id="password2" required>
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary btn-block" name="signup">Register</button>
       
    </form>

    <div class="text-center">
        <a class="d-block small mt-3" href="userlogin.php"></a>
    </div>
        </div>
        </div>
    </div>
    
     <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

