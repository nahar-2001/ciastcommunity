
<?php 

session_start();

if (isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

if (isset($_POST["submit"]) ) {
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {

        // set session
        $_SESSION['submit'] = true;
        header("location: 2-admindashboard.php");
        exit;
    }else {
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    <title>Document</title>
</head>
<body>
    
    <h1>Login Admin</h1>

<?php if(isset($error) ) :?>
<p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<form action="" method="post">

<li>
    <label for="username">Username :</label>
    <input type="text" name="username" id="username">
</li>

<li>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
</li>

<button type="submit" name="submit">Login</button>

</form>

</body>
</html>