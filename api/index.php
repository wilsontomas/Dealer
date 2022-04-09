<?php
header("Access-Control-Allow-Origin: *");
   require 'database.php';

   $clase = new dbContext();
   $clase->connect_db();
   

   $result = $clase->getAllVehicle();
   $clase->close();
/*
   while ($row = $result->fetch_assoc()) {
    echo $row['classtype']."<br>";
}*/
/*
$rows=null;
while($data=mysqli_fetch_assoc($result)){

}*/
//$rows = $result->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
?>