<?php
if(isset($_POST['signup-btn'])){
    require 'db.inc.php';
     $username=$_POST['form-username'];
     $email=$_POST['form-email'];
     $password=$_POST['form-password'];
     $repeatPassword=$_POST['form-password-repeat'];

    // if(empty($username) || empty($email) || empty($password) ||empty($repeatPassword)){
    //     header("Location:../signup.php?error=emptyfields&form-username=".$username."&form-email=".$email);
    //     exit();
    // }
    // else if(!preg_match("/^[a-zA-Z0-9]*$/",$username) && !filter_var($email,FILTER_VALIDATE_EMAIL)){
    //     header("Location:../signup.php?error=invalidemail&username");
    //     exit();
    // }
    // else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    //     header("Location:../signup.php?error=invalidemail&form-username=".$username);
    //     exit();
    // }
    // else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    //     header("Location:../signup.php?error=invalidusername&form-email=".$email);
    //     exit();
    // }
    // else if($password !==$repeatPassword){
    //     header("Location:../signup.php?error=passwordcheck&form-username=".$username."&form-email=".$email);
    //     exit();
    // }
    // else{
        // $query ="SELECT * from users WHERE userId='$username'";
        // $users=mysqli_query($conn,$query);
        // $query ="SELECT * from users WHERE email='$email'";
        // $emails=mysqli_query($conn,$query);
        // $result=max($users,$emails);
        // if(mysqli_num_rows($result)>0){
        //     header("Location:../signup.php?error=usertaken&form-email=".$email);
        //     exit();
        // }
        // else {
            $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
            $query="INSERT INTO users (userId,useremail, userpassword) VALUES('$username','$email','$hashedPassword')";
            mysqli_query($conn,$query);
            header("Location:../signup.php?signup=success");
            exit();
    mysqli_close($conn);
}
else{
    header("Location:../signup.php");
    exit();
}
?>