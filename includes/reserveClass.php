<?php
if(isset($_POST['reserve'])){
    require '../includes/csvdb.php';
    $day=$_GET['day'];
    $slot=$_GET['slot'];
    $teacher=$_GET['teacher'];
    $course=$_GET['course'];
    $program=$_GET['program'];
    $class=$_POST['class'];
    $text=$teacher .' '. $program. ' '. $course;
    $query="UPDATE $class SET $slot='Reserved $text' WHERE Day='$day'";
    session_start();
    $_SESSION['Monady']=1;
    $_SESSION['slot1']=1;

    
    echo $query;
    $result=mysqli_query($conn,$query);
    if($result){
        // alert('Reserved'.strtoupper($class).'at'.$slot);
    }
}

?>