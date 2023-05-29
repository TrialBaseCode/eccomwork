<?php

  include("config/dbcon.php");

  function getAllActive($table){
    global $con;
    $query = "SELECT * FROM $table WHERE status='0'";
    $query_run = mysqli_query($con, $query);
    return  $query_run;
   }

   
   function getBySlugActive($table , $slug){
      global $con;
      $query = "SELECT * FROM $table WHERE slug='$slug' AND status='0' LIMIT 1";
      $query_run = mysqli_query($con, $query);
      return  $query_run;
    }

    function getAProductByCategory($table, $category_id)
    {
      global $con;
      $query = "SELECT * FROM $table WHERE  category_id='$category_id' AND status='0'";
      $query_run = mysqli_query($con, $query);
      return  $query_run;
    }

   function getByIdActive($table , $id){
      global $con;
      $query = "SELECT * FROM $table WHERE id='$id' AND status='0'";
      $query_run = mysqli_query($con, $query);
      return  $query_run;
    }
   
    function getCartItems() {
       global $con;
       $userId=   $_SESSION['auth_user']['user_id'];
       $query = "SELECT c.id as cid, c.prod_id , c.prod_qty , p.id as pid, p.name, p.image, p.selling_price 
       FROM carts c, products p
       WHERE c.prod_id= p.id 
       AND user_id='$userId'
       ORDER BY c.id DESC";
       
       return $query_run = mysqli_query($con, $query);

    }
 
    function getOrders() {
      global $con;
      $userId=   $_SESSION['auth_user']['user_id'];

      $query = "SELECT * FROM orders WHERE user_id=' $userId' ORDER BY id DESC";
      return $query_run = mysqli_query($con, $query);

    }
   function redirect($url , $message)
   {
      $_SESSION['message'] = $message;
      header('Location:' .$url);
      exit();
   }


?>