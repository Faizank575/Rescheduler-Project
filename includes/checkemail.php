<?php
require 'db.inc.php';

$username=$_POST['user_email'];
$query ="SELECT * FROM users WHERE useremail='$username'";
$result=mysqli_query($conn,$query);
echo mysqli_num_rows($result);
?>