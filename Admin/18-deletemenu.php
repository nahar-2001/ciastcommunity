<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

if (deletemenu($condb, $id) > 0) {

    echo "
        <script>
            alert('Your Post Has Been Deleted!'); 
            document.location.href = '17-menupost.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Your Post Failed To Deleted!');    
        </script>
        ";
}
