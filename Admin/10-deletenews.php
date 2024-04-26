<?php

require_once 'functions.php';

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

$id = $_GET['id'];

if (deletenews($condb, $id) > 0) {

    echo "
        <script>
            alert('Data report berjaya dipadam!'); 
            document.location.href = '7-viewnews.php';   
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data report gagal dipadam!');    
        </script>
        ";
}
