
<?php
require 'csvdb.php';
$table=$_POST['Table'];
$slot=$_POST['Slot'];
if(isset($table)){
    showClassrecords($table);
}
function showClassrecords($class){
    require 'csvdb.php';
    $query="SELECT * from $class";
    $result=mysqli_query($conn,$query);

    $table='<table cellpadding="0" cellspacing="0" border="0">
    <caption><h1>'.$class.'</h1></caption>
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
    while ($row = mysqli_fetch_row($result)) {
        $table.="<tr>";
        $table .="<td>".$row[0]."</td>";
        $table .="<td>".$row[1]."</td>";
        $table .="<td>".$row[2]."</td>";
        $table .="<td>".$row[3]."</td>";
        $table .="<td>".$row[4]."</td>";
        $table .="<td>".$row[5]."</td>";
        $table .="<td>".$row[6]."</td>";
        $table.="</tr>";

    }
    $table.="</body>
            </table>";
    echo $table;
}

?>