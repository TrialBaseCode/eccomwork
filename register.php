<?php 
session_start();
include('include/header.php'); 

?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <?php 
                if(isset($_SESSION['message'])) 
                { 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message'];  ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                    unset($_SESSION['message']);
                 }
                 ?>
                <div class="card">
                    <div class="card-header">
                        <h1>Registration Form</h1>
                    </div>
                    <div class="card-body">
                        <form action="functions/authcode.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNumber1" class="form-label">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="exampleInputNumber1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword2" class="form-label">Confirm password</label>
                                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword2">
                            </div>
                            <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>