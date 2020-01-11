<head>
<link rel="stylesheet" href="./css/dashbord.css">
</head>
<?php
require './includes/header.php';
?>


<div class="main-dashbord">
<div class="log-box">
    <form action="./show_free_slots.php" method="POST">
    Your Program & Semester
    <input name="Program" type="text" placeholder="e.g. BCS-6">
    Coure Name
    <input name="Course" type="text" placeholder="e.g. FA (Financial Accounting) ">
    Coure Teacher
    <input name="teacher" type="text" placeholder="e.g. Waqas Hanif">
    Select the Day 
    <select id="Day" name="day">
        <option selected disabled hidden style='display: none' value=''>--Select a Day--</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
    </select>
    Select the Time Slot (optional if you want to see the complete class timetable)
    <select id="slot" name="slot">
        <option selected disabled hidden style='display: none' value=''>--Select a Slot--</option>
        <option value="slot1">Slot 1 - 8:30-10:00</option>
        <option value="slot2">Slot 2 - 10:00-11:30</option>
        <option value="slot3">Slot 3 - 11:30-01:00</option>
        <option value="slot4">Slot 4 - 01:30-03:00</option>
        <option value="slot5">Slot 5 - 03:00-04:30</option>
    </select>
    <input name="show_free_slots" type="submit" value="Search">
</form> 
</div>
</div>