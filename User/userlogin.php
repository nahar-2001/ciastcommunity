<?php

session_start();
require_once '../functions.php';

if (isset($_POST['login'])) {
    // var_dump($_POST);die;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($condb, "SELECT * FROM login WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            header("location: homepage.php");
        }
    }
    $error = true;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>User Login</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">

            <div class="card-header"><center><h1>Welcome To Ciast Community</h1></center></div>

            <div class="card-body">
            <?php if (isset($error)): ?>
            <p style="color: red; font-style: italic">Username / Password SALAH!</p>
            <?php endif; ?>

            <center><p>Login To Ciast Community</p></center>

            <form action="" method="POST">
            </div>

            <div class="form-group">
            <label for="username">Username :</label><br>
            <input class="form-control" type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
            <label for="email">Email :</label><br>
            <input class="form-control" type="text" name="email" id="email" required>
            </div>

            <div class="form-group">
            <label for="password">Password :</label><br>
            <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember Password</label>
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>

            </form>

            <div class="text-center">
                <a class="d-block small mt-3" href="usersignup.php">Register an Account</a>
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