# Install the dasboard shorcut

1. https://www.creative-tim.com/
 
        Make the all ui and ux dhasboard by these
    
2. Databse connection admin/config/dbcon.php
  
        <?php 

        $host = "localhost";
        $username = "root";
        $password = "";
        $database  = "phpcomm";

        // Creating database connection

        $con = mysqli_connect($host, $username , $password , $database);

        // Check database connect or not connect

        if (!$con) {
            die("Connection Failed");
        } else {
            echo "connected success";
        }


        ?>