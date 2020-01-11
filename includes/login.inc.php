<?php
if(isset($_POST['login_button'])){
    include 'db.inc.php';
    $UidOrEmail=$_POST['login_emailoruid'];
    $password=$_POST['login_password'];
    // $username="SELECT * FROM users WHERE userId='$UidOrEmail'";
    $userEmail="SELECT * FROM users WHERE useremail='$UidOrEmail'";
    
    // if(!$result=mysqli_query($conn,$username)){
        $result=mysqli_query($conn,$userEmail);
    // }

    if($row=mysqli_fetch_assoc($result)){
        $passwordCheck=password_verify($password,$row['userpassword']);
        echo '$passwordCheck';
        if($passwordCheck==false){
            header("Location:../login.php?error=IvalidEmailorPassword");
            exit();
        }
        else{
            $username="SELECT userId FROM users WHERE useremail='$UidOrEmail'";
            $result=mysqli_query($conn,$username);
            $row=mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['username']=$row['userId'];
            header("Location:../dashbord.php?username=".$row['userId']);
        }
    }
}

?>