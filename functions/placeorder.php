<?php

session_start();
include('../config/dbcon.php');




if (isset($_SESSION['auth'])) {

    if (isset($_POST['placeOrderBtn'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $payment_mode = mysqli_real_escape_string($con, $_POST['payment_mode']);
        $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);



        if ($name == '' ||  $email == '' || $phone == '' || $pincode == '' || $address == '') {
            $_SESSION['message'] = "All fields are mandatory";
            header('Location: ../checkout.php');
            exit(0);
        }

        // from userfunction
      
            global $con;
            $userId=   $_SESSION['auth_user']['user_id'];
            $query = "SELECT c.id as cid, c.prod_id , c.prod_qty , p.id as pid, p.name, p.image, p.selling_price 
            FROM carts c, products p
            WHERE c.prod_id= p.id 
            AND user_id='$userId'
            ORDER BY c.id DESC";
            
           $query_run = mysqli_query($con, $query);
        
         
         //---


        $totalPrice = 0;
        $retailPrice = 0;
        foreach ($query_run  as $citems) {

            $retailPrice =  $citems['selling_price'] * $citems['prod_qty'];
            //  echo $citems['name'];
            $totalPrice +=  $retailPrice;
        }
       
        $tracking_no = "Sharmacoder".rand(1111, 9999).substr($phone, 2);
        $user_id = $_SESSION['auth_user']['user_id'];
        $insert_query = "INSERT INTO orders (tracking_no, user_id, name, email, phone, address, pincode, total_price, payment_mode, payment_id)
        VALUES ('$tracking_no', '$user_id', '$name', '$email', '$phone', '$address', '$pincode', '$totalPrice', '$payment_mode', '$payment_id') ";
        

        $insert_query_run = mysqli_query($con,  $insert_query);

        if($insert_query_run){
            $order_id = mysqli_insert_id($con) ;
            foreach ($query_run as $citems) {
                $prod_id = $citems['prod_id'];
                $prod_qty = $citems['prod_qty'];
                $price = $citems['selling_price'];

                $insert_items_query = "INSERT INTO order_items (order_id, prod_id, qty, price) VALUES ('$order_id', '$prod_id', '$prod_qty ', '$price' ) ";
                $insert_items_query_run = mysqli_query($con, $insert_items_query);
            }
          

            $_SESSION['message'] = "Order Placed Succesfully";
            header('Location: ../my-orders.php');
            die();
        }

}
} else {
    header('Location: ../index.php');
}


?>