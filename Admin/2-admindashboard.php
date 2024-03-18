<?php 
session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: 1-adminlogin.php');
    exit;
}

?>


    <h1>Welcome Admin</h1>

    <p><a href="3-add.php">Students Register</a></p>
    <p><a href="4-list.php">Students List</a></p>
    <p><a href="7-news.php">News</a></p>
    <p><a href="8-report.php">Reports</a></p>
    <p><a href="9-menu.php">Menu</a></p>
    <p><a href="10-sports.php">Sports</a></p>
    <a href="11-logout.php" onclick="return confirm('Are You Sure???');">Logout</a>
