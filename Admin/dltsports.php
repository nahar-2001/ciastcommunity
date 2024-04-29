<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

if (deletesports($condb, $id) > 0) {

    echo "
        <script>
            alert('Your Post Has Been Deleted!'); 
            document.location.href = '13-sportspost.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Your Post Failed To Deleted!');    
        </script>
        ";
}
