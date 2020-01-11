<?php
    require './includes/header.php';
?>
<head>
<title> Login </title>
<link rel="stylesheet" href="./css/loginform.css">
</head>
<div class="loginbox">
    <img src="./images/user.png" class="logo">
    <h1>Login Here</h1>
    <form action="./includes/login.inc.php" method="POST">
        <p>Username</p>
        <input type="text" name="login_emailoruid" placeholder="Email">
        <p>Password</p>
        <input type="password" name="login_password" placeholder="Password">
        <input type="submit" name="login_button" placeholder="Login" class="button">
    </form>
    </div>