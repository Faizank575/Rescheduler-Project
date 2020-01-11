<?php
require 'csvdb.php';

$day=$_POST['Day'];
$slot=$_POST['Slot'];
$course=$_POST['Course'];
$teacher=$_POST['Teacher'];
$program=$_POST['Program'];
$query="SHOW TABLES";
$count=0;
$notable=true;
$dropdown='';
$table='';
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
    $lt=$row[0];
    $query_for_slot="SELECT * FROM $lt where Day='$day' AND $slot=''";
    
    $freeslot=mysqli_query($conn,$query_for_slot);
    if($row=mysqli_fetch_array($freeslot)){
        if($count==0){
            $dropdown.='<h1>Select Class to Reserve</h1><br/>
            <select id="class" name="class">
            <option selected disabled hidden style="display: none" value="">--Select Class--</option>';
            $notable=false;
            echo '<h1>Available Lecture theater</h1>';
        }
        $dropdown.='<option value="'.$lt.'">'.$lt.'</option>';
        $table.='<table cellpadding="0" cellspacing="0" border="0">
                <caption><h1>'.$lt.'</h1></caption>
                <div class="tbl-header">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>8:30-10:00</th>
                            <th>10:00-11:30</th>
                            <th>11:30-01:00</th>
                            <th>break</th>
                            <th>01:30-03:00</th>
                            <th>03:00-04:30</th>
                        </tr>
                    </thead>
                </div>
                <tbody>';
                $table .="<tr>";
                    $table .="<td>".$row[0]."</td>";
                    $table .="<td>".$row[1]."</td>";
                    $table .="<td>".$row[2]."</td>";
                    $table .="<td>".$row[3]."</td>";
                    $table .="<td>".$row[4]."</td>";
                    $table .="<td>".$row[5]."</td>";
                    $table .="<td>".$row[6]."</td>";
                    $table .="</tr></tbody></table>";

    $count++;
    }
}
if($notable==true){
    echo '<h1>Sorry! No Room Available for that Time</h1>';
}
else{
    echo $table;
    $dropdown .='</select>';
    $form='<form action="./includes/reserveClass.php?day='.$day.'&slot='.$slot.'&teacher='.$teacher.'&course='.$course.'&program='.$program.'" method="POST">'. $dropdown.'<br/><br/>
    <input type="submit" name="reserve" id="reserve" value="Reserve"></form>';
    echo $form;
}

?>