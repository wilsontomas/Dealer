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
            /*while($row=mysqli_fetch_row($result))
            {
                echo $row[0] . " ";
                echo $row[1] . " ";
                echo $row[2] . " ";
                echo $row[3] . " ";
                echo $row[4] . " ";
                echo $row[5] . " ";
                echo $row[6] . " ";
                echo $row[7] . " ";
                echo $row[8] . " ";
                echo $row[9] . " ";
                echo $row[10] . " ";
        
                echo "<br>";
            }*/

            mysqli_close($con);

            return $result;
        }

        function getCarById($id)
        {
            $con = $this->connect();

            $query = "Select CarType, Make, Model, Milleage, Fuel, EngineSize, MotorPower, 
            Gearbox, SeatNumber, Doors, Color from Cars where id = $id";

            $result = mysqli_query($con,$query);

            /*while($row=mysqli_fetch_row($result))
            {
                echo $row[0] . " ";
                echo $row[1] . " ";
                echo $row[2] . " ";
                echo $row[3] . " ";
                echo $row[4] . " ";
                echo $row[5] . " ";
                echo $row[6] . " ";
                echo $row[7] . " ";
                echo $row[8] . " ";
                echo $row[9] . " ";
                echo $row[10] . " ";
            }*/

            return $result;
        }

    }

?>
