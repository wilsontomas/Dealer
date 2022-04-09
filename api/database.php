<?php
header("Access-Control-Allow-Origin: *");
 class dbContext{

   
    protected $servername="localhost";
    protected $username="root";
    protected $password="";
    protected $db="dealerdb";
    protected $connection=null;

     function connect_db(){
         
       $this->connection = new mysqli($this->servername, $this->username, $this->password,$this->db);
        if ( $this->connection->connect_error) {
            die("Connection failed: " .  $this->connection->connect_error);
          }
         
    }

    function getAllVehicle(){
       $resultado = $this->connection->query("SELECT * FROM `cars`");
     /* while($data= $resultado->fetch_assoc()){
        echo $data['nombre'];
      }*/
      $rows = $resultado->fetch_all(MYSQLI_ASSOC);
      return $rows;
    }
    function getVehicleById($id){
      $resultado = $this->connection->query("SELECT * FROM `cars` WHERE Id=".$id);
    /* while($data= $resultado->fetch_assoc()){
       echo $data['nombre'];
     }*/
     $rows = $resultado->fetch_all(MYSQLI_ASSOC);
     return $rows;
   }
    function close(){
        $this->connection->close();
    }

}

//$clase = new dbContext();
//$clase->connect_db();
//$clase->insert('eduar','402','wilsonpumm@gmail.com','hombre','809','calle t','marca','modelo','placa');
//$clase->getAllVehicle();
?>