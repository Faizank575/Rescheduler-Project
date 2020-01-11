<?php

    $host='localhost';
    $username='root';
    $password='';
    $dbName='login';

    $conn=mysqli_connect($host,$username,$password,$dbName) or die("Connection Failed : ". mysqli_connect_error());
?>