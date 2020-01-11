<head>

<link rel="stylesheet" href="./css/classTables.css">
    <link rel="stylesheet" href="./css/dashbord.css">
    <script src="./includes/jquery-3.3.1.js"></script>
    <script>
    $(document).ready(function(){
    $("#show_records").click(function(){
        console.log('123');
        var table=$("#table").val();
        console.log(table);
        var slot=$("#slot").val();
        console.log(slot);
        $("#table_display").load("./includes/showClassRecords.php",{
            Table:table,
            Slot:slot
        });
    });
});
</script>
</head>
<?php
require './includes/header.php';
require './includes/classestimetable.php';
?>
<div class="main-dashbord">
<div class="log-box">
Enter the Details for the Class Timetable you want to see</h2>
    Select the Class<br/>
    <select name="Tables"  id="table" required>
        <?php echo $tables;?>
    </select>
    Select the Time Slot (optional if you want to see the complete class timetable)
    <select id="slot" name="slots">
        <option selected disabled hidden style='display: none' value=''>--Select a Slot--</option>
        <option value="slot1">Slot 1 - 8:30-10:00</option>
        <option value="slot2">Slot 2 - 10:00-11:30</option>
        <option value="slot3">Slot 3 - 11:30-01:00</option>
        <option value="slot4">Slot 4 - 01:30-03:00</option>
        <option value="slot5">Slot 5 - 03:00-04:30</option>
    </select>

    <button id="show_records">Show Timetable</button>
</div>
<div id="table_display"></div>
</div