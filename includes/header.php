<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Acme|Courgette|Unlock" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chicle|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <div class="navbar-container">
        <div class="toggle">
            <div class="logo-img">
            <img src="images/10.PNG" alt="Logo">
            </div>
            <div class="toggle-bars">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="nav">
            <nav>
                <div class="logo-img1">
                    <a href="index.php"><h2>ReScheduler</h2></a>
                </div>
                <div class="navbar">
                <ul>
                <?php
                if(isset($_SESSION['username'])){
                    $navbar='<li><a href="./dashbord.php?username='.$_SESSION['username'].'">Dashbord</a></li>';
                    $navbar.='<li><a href="./classRescheduling.php">Reshedule Class</a></li>';
                    $navbar.='<li><a href="./signup.php">Register</a></li>';
                    $navbar.='<li class="login-btn">';
                    $navbar.='<a href="./includes/logout.inc.php" style="text-decoration:none">Logout</a></li>';
                    echo $navbar;
                }
                else{
                ?>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li class="login-btn">
                    <a href="login.php" style="text-decoration:none">Login</a>
                    </li>
                <?php } ?>
                </ul>
                </div>
            </nav>
        </div>
    </div>