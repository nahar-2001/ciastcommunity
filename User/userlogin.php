<?php

session_start();
require_once '../functions.php';

if (isset($_POST['login'])) {
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
    <title>User Login</title>
</head>

<body>
    <h1>Welcome To Ciast Community</h1>

    <?php if (isset($error)): ?>
        <p style="color: red; font-style: italic">Username / Password SALAH!</p>
    <?php endif; ?>

    <p>Login To Ciast Community</p>

    <form action="" method="POST">
        <ul>
        <li>
            <label for="username">Username :</label><br>
            <input type="text" name="username" id="username" required>
        </li><br>

        <li>
            <label for="email">Email :</label><br>
            <input type="text" name="email" id="email" required>
        </li><br>

        <li>
            <label for="password">Password :</label><br>
            <input type="password" name="password" id="password" required>
        </li><br>

        <button type="submit" name="login">Login</button>
        </ul>
    </form><br>
    
    <a href="usersignup.php">I Don't Have An Account!!!</a>

</body>

</html>