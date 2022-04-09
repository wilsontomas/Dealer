<?php
header("Access-Control-Allow-Origin: *");

   require 'database.php';
 $clase = new dbContext();
 $clase->connect_db();

   if(isset($_GET['envio'])){
 $result = $clase->getVehicleById($_GET['envio']);
 echo json_encode($result);
   }
  
   $clase->close();

?>