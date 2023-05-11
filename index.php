<?php 
session_start();
include('include/header.php'); 
?>

<?php
  if (isset($_SESSION['message'])) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message'];  ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['message']);
   }
?>
<main>
    <div class="container">
       <h4>Hello World</h4>
    </div>
</main>

<?php include('include/footer.php'); ?>