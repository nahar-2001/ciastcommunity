<?php

require_once '../config.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

if (padampelajar($condb, $id) > 0) {

    echo "
        <script>
            alert('Data pelajar berjaya dipadam!'); 
            document.location.href = '4-list.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data pelajar gagal dipadam!');    
        </script>
        ";
}
