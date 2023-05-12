<?php

include('../functions/myfunction.php');

if(isset($_SESSION['auth']))
{
   if($_SESSION['role_as'] != 1)
   {
    // $_SESSION['message'] = "You are not autherized to access..";
    // header('Location: ../index.php');

    redirect("../index.php" , "You are not autherized to access..");
   }
} else {
    // $_SESSION['message'] = "Login to continue";
    // header('Location: ../login.php');

    redirect("../login.php" , "Login to continue");
}

?>