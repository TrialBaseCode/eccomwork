<?php

  include("../config/dbcon.php");
  // fetch
  function getAll($table){
     global $con;
     $query = "SELECT * FROM $table";
     $query_run = mysqli_query($con, $query);
     return  $query_run;
  }

  function getById($table , $id){
   global $con;
   $query = "SELECT * FROM $table WHERE id='$id'";
   $query_run = mysqli_query($con, $query);
   return  $query_run;
  }
  
  function getAllOrders(){
      global $con;
      $query = "SELECT * FROM orders WHERE status='0'";
      $query_run = mysqli_query($con, $query);
      return  $query_run;
  }

  function  getOrderHistory(){
   global $con;
   $query = "SELECT * FROM orders WHERE status !='0'";
   $query_run = mysqli_query($con, $query);
   return  $query_run;
  }
 
  function redirect($url , $message)
  {
     $_SESSION['message'] = $message;
     header('Location:' .$url);
     exit();
  }


  function checkTrackingNoValid($trackingNo)
  {
      global $con;

      $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo'  ";

      return mysqli_query($con, $query);
  }

 

?>