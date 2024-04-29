<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

if (deleteadmin($condb, $id) > 0) {

    echo "
        <script>
            alert('Your Data Has Been Deleted!'); 
            document.location.href = 'tblsubadmin.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Failed To Deleted!');    
        </script>
        ";
}