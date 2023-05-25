<?php

if(!isset($_SESSION['auth']))
{
   header('location: login.php');
   redirect("login.php", "Login to continue");

}

?>