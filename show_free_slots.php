
<?php
require './includes/header.php';
?>
<head>
    <link rel="stylesheet" href="./css/free_slots.css">
<link rel="stylesheet" href="./css/classTables.css">
</head>
<?php
if(isset($_POST['show_free_slots'])){
    $day=$_POST['day'];
    $slot=$_POST['slot'];
    $course=$_POST['Course'];
    $teacher=$_POST['teacher'];
    $program=$_POST['Program'];
}
?>
<script src="./includes/jquery-3.3.1.js"></script>
<script>
$(document).ready(function(){
    var day="<?php echo $day ?>";
        var slot="<?php echo $slot ?>";
        var course="<?php echo $course ?>";
        var teacher="<?php echo $teacher ?>";
        var program="<?php echo $program ?>";
        console.log(day, slot);
        $("#free_slots").load('./includes/free_slots.php',{
            Day: day,
            Slot:slot,
            Course:course,
            Teacher:teacher,
            Program:program
        })
 });
</script>
<div class="main">
    <div id="free_slots">

    </div>
</div>
