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
    echo "<div class='connect'>connected success</div>";
}


?>