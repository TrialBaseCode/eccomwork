<?php

session_start();
include('../config/dbcon.php');
include('myfunction.php');

if (isset($_POST['register_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    //Check field not empty

    if($name == '' || $phone == ''|| $email == '' || $password == ''|| $cpassword == '' )
    {
        $_SESSION['message'] = "Please field should not empty";
        header('Location: ../register.php');
    }
    else
    {
    // Check if email already register
    $check_email_query = "SELECT email FROM userreg WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered";
        header('Location: ../register.php');
    } else {


        if ($password == $cpassword) {
            //  Inser user data
            $insert_query = "INSERT INTO userreg (name,email,phone,password) VALUE ('$name', '$email' ,'$phone', '$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header('location: ../login.php');
            } else {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../register.php');
            }
        } else {
            $_SESSION['message'] = "Passwords do not match";
            header('Location: ../register.php');
        }
    }
  }
} else if (isset($_POST['login_btn'])){
   $email =  mysqli_real_escape_string($con, $_POST['email']);
   $password =  mysqli_real_escape_string($con, $_POST['password']);

   $login_query = "SELECT * FROM userreg WHERE email='$email' AND password='$password'";
   $login_query_run = mysqli_query($con, $login_query);
    
   if(mysqli_num_rows($login_query_run) > 0){
    $_SESSION['auth'] = true;

    $userdata = mysqli_fetch_array($login_query_run);
    $username =   $userdata['name'];
    $useremail =   $userdata['email'];
    
    // for admin login
    $role_as =   $userdata['role_as'];
    /////

    $_SESSION['auth_user'] = [
        'name' => $username,
        'email' => $useremail  
    ];
    
     // for admin login
    $_SESSION['role_as'] =     $role_as ;

    if($role_as == 1)
    { 
    //    $_SESSION['message'] = "welcome to dashboard";
    //    header('Location: ../admin/index.php');
        redirect("../admin/index.php" , "welcome to dashboard");
    } else {
        // $_SESSION['message'] = "Logged In Successfully";
        // header('Location: ../index.php');
        redirect("../index.php" , "Logged In Successfully");
    }
     ////



   } else {
    //  $_SESSION['message'] = "password or email is incorrect";
    //  header('Location: ../login.php');
     redirect("../login.php" , "password or email is incorrect");
   }

}

?>