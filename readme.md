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

3. Make registration form and give authentic
   Note--
    -- If database auto incremet any will start from 0
       ALTER TABLE userreg AUTO_INCREMENT=1

4. The categories registration
    ALTER TABLE categories AUTO_INCREMENT=1

5. 
   ALTER TABLE products AUTO_INCREMENT=1

6. https://sweetalert2.github.io/#download  // for good ui alert