<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

if (padammenu($condb, $id) > 0) {

    echo "
        <script>
            alert('Your Menu Has Been Deleted!'); 
            document.location.href = 'tblmenu1.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Your Menu Failed To Deleted!');    
        </script>
        ";
}
