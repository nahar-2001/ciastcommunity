<?php 

session_start();

if (!isset($_SESSION['submit'])) {
    header('Location: userlogin.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../navbar/main.css">
</head>
<body>
    <div id="main">
        <div class="container">
            <div style="margin-top:150px;margin-bottom:30px;text-align:center;">
                <img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" style="width: 100px;margin-bottom:15px">
                <h1>WELCOME TO CIAST COMMUNITY</h1>
            </div>
            <nav>
                <div class="nav-fostrap">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="javascript:void(0)">MENU DM<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="">ISNIN</a></li>
                                <li><a href="">SELASA</a></li>
                                <li><a href="">RABU</a></li>
                                <li><a href="">KHAMIS</a></li>
                                <li><a href="">JUMAAT</a></li>
                                <li><a href="">SABTU</a></li>
                                <li><a href="">AHAD</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">AKTIVTI UMUM<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="">SURAU</a></li>
                                <li><a href="">AKTIVITI SEMASA</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">SUKAN<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="">JADUAL MINGGUAN</a></li>
                                <li><a href="">INFO SUKAN</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">TVET-i<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="">INFO TVET-i</a></li>
                                <li><a href="">GAMBAR</a></li>
                            </ul>
                        </li>
                        <li><a href="../navbar/About.php">ABOUT</a></li>
                        <li><a href="../navbar/contact.php">CONTACT</a></li>
                        <li><a href="userlogout.php" onclick="return confirm('Are You Sure???');">LOG OUT</a></li>
                    </ul>
                </div>
                <div class="nav-bg-fostrap">
                    <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
                    <a href="" class="title-mobile">Fostrap</a>
                </div>
            </nav>
            <div class='content'>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>