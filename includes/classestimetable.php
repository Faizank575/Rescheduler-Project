<?php
require 'csvdb.php';
$sql = "SHOW TABLES FROM $db";
$result = mysqli_query($conn,$sql);
$tables="<option selected disabled hidden style='display: none' value=''>--Select a Class--</option>";

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}

while ($row = mysqli_fetch_row($result)) {
$tables .="<option value='$row[0]'>".$row[0]."</option>";
}
mysqli_free_result($result);
?>