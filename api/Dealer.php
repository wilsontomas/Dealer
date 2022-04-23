<?php

    class DBcon
    {
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
        $query = "Select CarType, CarImg, Make, Model, Milleage, Fuel, EngineSize, MotorPower, 
        Gearbox, SeatNumber, Doors, Color from cars";
        $resultado = $this->connection->query("select * from cars");
     
       return $resultado;
     }
     function close(){
         $this->connection->close();
     }
        function connect()
        {
            $db_host = "localhost";
            $db_name = "dealerdb";
            $db_user = "root";
            $db_pass = "";
        
            $con = mysqli_connect($db_host,$db_user,$db_pass);
                
            if(mysqli_connect_errno())
            {
                echo "Failed to connect";
                exit();
            }

            mysqli_select_db($con,$db_name) or die ("Database not found");

            return $con;
        }

        function getCars()
        {
            $con = $this->connect();

            $query = "Select CarType, CarImg, Make, Model, Milleage, Fuel, EngineSize, MotorPower, 
            Gearbox, SeatNumber, Doors, Color from Cars";
            $result=null;
            //$result = mysqli_query($con,$query) or trigger_error(mysqli_error());
            if (!$result=$con -> query($query)) {
                echo("Error description: " . $con -> error);
              }
          

            mysqli_close($con);

            return $result;
        }

        function getCarById($id)
        {
            $con = $this->connect();

            $query = "Select CarType, Make, Model, Milleage, Fuel, EngineSize, MotorPower, 
            Gearbox, SeatNumber, Doors, Color from Cars where id = $id";

            $result = mysqli_query($con,$query);


            return $result;
        }

    }

?>
