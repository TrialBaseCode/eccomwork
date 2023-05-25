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
            <a class="text-white text-decoration-none" href="checkout.php">
                checkout
            </a>
        </h6>
    </div>
</div>

<main>
    <div class="py-5">
        <div class="container">
            <div class="card ">
                <div class="card-body shadow">
                    <form action="functions/placeorder.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Basic Details</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">Name</label>
                                        <input type="text" name="name" required placeholder="Enter Your Full Name" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">E-mail</label>
                                        <input type="email" name="email" required placeholder="Enter Your Email" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">Phone</label>
                                        <input type="text" name="phone" required placeholder="Enter Your phone no" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-bold">Pin Code</label>
                                        <input type="text" name="pincode" required placeholder="Enter Your pin code" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="fw-bold">Address</label>
                                        <textarea name="address" required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Order Details</h5>
                                <hr>
                                <div class="row align-items-center p-2">
                                    <div class="col-md-6">
                                        <h6>Product Details</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6>Price</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6>Retail Price</h6>
                                    </div>
                                </div>
                                <?php $items = getCartItems();
                                $totalPrice = 0;
                                $retailPrice = 0;
                                foreach ($items as $citems) {
                                ?>
                                    <div class="card product_data shadow-sm mb-3">
                                        <div class="row align-items-center p-2">
                                            <div class="col-md-3">
                                                <img src="uploads/<?= $citems['image'] ?>" alt="Image" class="w-50">
                                            </div>
                                            <div class="col-md-3">
                                                <h6><?= $citems['name'] ?></h6>
                                            </div>
                                            <div class="col-md-3">
                                                <h6><span>Rs </span><?= $citems['selling_price'] ?> <span class="text-danger">x<?= $citems['prod_qty'] ?><span></h6>
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                $retailPrice =  $citems['selling_price'] * $citems['prod_qty'];
                                                ?>
                                                <h6><?= $retailPrice ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    //  echo $citems['name'];
                                    $totalPrice +=  $retailPrice;
                                }
                                ?>
                                <hr>
                                <div class="total-amount">
                                <h5>Total Price: <span class="float-end fw-bold">Rs <?= $totalPrice ?></span></h5>
                                </div>
                                <div class="">
                                    <input type="hidden" name="payment_mode" value="COD">
                                    <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm and place order | COD</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('include/footer.php'); ?>