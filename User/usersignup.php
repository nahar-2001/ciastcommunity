<?php 
require '../config.php';

$userlog = ambildata($condb, 'SELECT * FROM userlogin');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
</head>

<body>
    <h1>Sign Up to Ciast Community</h1>

    <form action="" method="post">

        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">

        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>

        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>

</html>