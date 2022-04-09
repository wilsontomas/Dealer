<?php

    class DBcon
    {
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

            $query = "Select CarType, Make, Model, Milleage, Fuel, EngineSize, MotorPower, 
            Gearbox, SeatNumber, Doors, Color from Cars";

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
