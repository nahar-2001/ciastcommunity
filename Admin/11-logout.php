<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header('Location: 1-adminlogin.php');
exit;


?>