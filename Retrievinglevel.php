<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iotproject";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    
    $data=array(); 


   $sql = "SELECT * FROM (
    SELECT * 
    FROM tankmonitor 
    WHERE (TankID = 1)  ORDER BY ID DESC LIMIT 5) AS `table` ORDER by ID ASC";

   if ($q=mysqli_query($con, $sql)) {
    while ($row = $q->fetch_assoc()){
        echo "{$row['Water_level']}  {$row['Timerecorded']} \n";
    }
   } 
   
?>
//asdf