<?php

session_start();

require_once 'functions.php';

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



if (isset($_POST['submit'])) {
	// var_dump($_POST);die;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($condb, "SELECT * FROM adminlogin WHERE username = '$username'");

	if (mysqli_num_rows($result) === 1) {

		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row['password'])) {
			$_SESSION['submit'] = true;
			header("location: 2-admindashboard.php");
		}
	}
	$error = true;

	$password = password_hash($password, PASSWORD_DEFAULT);


}
?>




<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<style>
		body {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			font-family: 'Jost', sans-serif;
			background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
		}

		.main {
			width: 350px;
			height: 500px;
			background: red;
			overflow: hidden;
			background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
			border-radius: 10px;
			box-shadow: 5px 20px 50px #000;
		}

		#chk {
			display: none;
		}

		.signup {
			position: relative;
			width: 100%;
			height: 100%;
		}

		label {
			color: #fff;
			font-size: 2.3em;
			justify-content: center;
			display: flex;
			margin: 60px;
			font-weight: bold;
			cursor: pointer;
			transition: .5s ease-in-out;
		}

		input {
			width: 60%;
			height: 20px;
			background: #e0dede;
			justify-content: center;
			display: flex;
			margin: 20px auto;
			padding: 10px;
			border: none;
			outline: none;
			border-radius: 5px;
		}

		button {
			width: 60%;
			height: 40px;
			margin: 10px auto;
			justify-content: center;
			display: block;
			color: #fff;
			background: #573b8a;
			font-size: 1em;
			font-weight: bold;
			margin-top: 20px;
			outline: none;
			border: none;
			border-radius: 5px;
			transition: .2s ease-in;
			cursor: pointer;
		}

		button:hover {
			background: #6d44b8;
		}

		.login {
			height: 460px;
			background: #eee;
			border-radius: 60% / 10%;
			transform: translateY(-180px);
			transition: .8s ease-in-out;
		}

		.login label {
			color: #573b8a;
			transform: scale(.6);
		}

		#chk:checked~.login {
			transform: translateY(-500px);
		}

		#chk:checked~.login label {
			transform: scale(1);
		}

		#chk:checked~.signup label {
			transform: scale(.6);
		}
	</style>
</head>

<?php if (isset($error)) : ?>
	<p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="signup">

			<form action="" method="post">

				<label for="chk" aria-hidden="true">Admin Login</label>

				<input type="username" name="username" id="username" placeholder="Username" required="">

				<input type="password" name="password" id="password" placeholder="Password" required="">

				<button type="submit" name="submit">Login</button>
				
			</form>
			<a href="../index.php" style="text-decoration: none; color:white;"><button>Back</button></a>
		</div>
	</div>
</body>

</html>