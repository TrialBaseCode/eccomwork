<?php
include('include/header.php');
include('functions/userfunction.php');
include('authenticate.php');
?>

<div class="py-3 bg-primary breadcrumb">
    <div class="container">
        <h6 class="text-white">
            <a class="text-white text-decoration-none" href="index.php">
                Home</a> /
            <a class="text-white text-decoration-none" href="carts.php">
                cart
            </a>
        </h6>
    </div>
</div>

<main>
    <div class="py-5">
        <div class="container">
            <div class="card card-body shadow">
                <div class="row">
                    <div class="col-md-12">
                    <div id="mycart">
                        <?php $items = getCartItems(); 
                            if(mysqli_num_rows($items) > 0)
                                {
                                        ?>
                                    <div class="row align-items-center p-2">
                                        <div class="col-md-5">
                                            <h6>Product Details</h6>
                                        </div>
                                        <div class="col-md-3">
                                            <h6>Price</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>Quantity</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>Action</h6>
                                        </div>
                                    </div>
                                    <div id="">
                                        <?php 
                                                foreach ($items as $citems) {
                                                    ?>
                                                        <div class="card product_data shadow-sm mb-3">
                                                            <div class="row align-items-center p-2">
                                                                <div class="col-md-2">
                                                                    <img src="uploads/<?= $citems['image'] ?>" alt="Image" class="w-50">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h5><?= $citems['name'] ?></h5>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h5><span>Rs </span><?= $citems['selling_price'] ?></h5>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <input type="hidden" class="prodId" value="<?= $citems['prod_id'] ?>">
                                                                    <div class="input-group myrangeinputtxt">
                                                                        <button class="input-group-text decrement-btn updateQty"  data-field="quantity">-</button>
                                                                        <input type="text" class="form-control text-center bg-white input-qty" value="<?= $citems['prod_qty'] ?>" disabled>
                                                                        <button class="input-group-text increment-btn  updateQty"  data-field="quantity">+</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button class="btn btn-danger btn-sm deleteItem" value="<?= $citems['cid'] ?>">
                                                                        <i class="fa fa-trash me-2"></i><span>Remove</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    //  echo $citems['name'];
                                                }
                                        ?>
                                    </div>
                                    <div class="float-end">
                                        <a href="checkout.php" class="btn btn-outline-primary">Proceed to checkout</a>
                                    </div>
                                   <?php
                                    } else {
                                    ?>
                                    <div class="text-center">
                                        <h4 class="py-3">Your card is Empty</h4>
                                    </div>
                                    <?php
                                   }
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('include/footer.php'); ?>