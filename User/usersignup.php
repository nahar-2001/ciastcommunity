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
    <title>User Sign Up</title>
</head>

<body>
    <h1>Sign Up to Ciast Community</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" required>
            </li><br>
            <li>
                <label for="email">Email:</label><br>
                <input type="text" name="email" id="email" required>
            </li><br>
            <li>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" required>
            </li><br>
            <li>
                <label for="password2">Confirm Password:</label><br>
                <input type="password" name="password2" id="password2" required><br>
            </li><br>
            <button type="submit" name="signup">Register</button>
        </ul>

    </form>
    </form>
</body>

</html>