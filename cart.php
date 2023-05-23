<?php
include('include/header.php');
include('functions/userfunction.php');
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
                        
                        <?php $items = getCartItems();
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
                                        <div class="input-group myrangeinputtxt">
                                            <span class="input-group-text decrement-btn">-</span>
                                            <input type="text" class="form-control text-center bg-white input-qty" value="<?= $citems['prod_qty'] ?>" disabled>
                                            <span class="input-group-text increment-btn">+</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-sm">
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
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('include/footer.php'); ?>