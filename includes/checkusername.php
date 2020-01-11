<?php
require 'db.inc.php';

$username=$_POST['user_name'];
$query ="SELECT * FROM users WHERE userId='$username'";
$result=mysqli_query($conn,$query);
echo mysqli_num_rows($result);
?>