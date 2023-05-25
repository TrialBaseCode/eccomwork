<?php
include('include/header.php');
include('functions/userfunction.php');

// error com: Warning: Undefined array key  or Trying to access array offset on value of type null
if (isset($_GET['product'])) {
    $product_slug = $_GET['product'];
    $product_data = getBySlugActive("products",$product_slug);
    $product = mysqli_fetch_array($product_data);

    if ($product) {
?>
        <div class="container product_view_manage product_data">
            <div class="row">
                <div class="col-md-4">
                    <div class="product-image-view">
                        <img src="uploads/<?= $product['image']; ?>" alt="products image <?= $product['name']; ?>">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product-name">
                        <h4 class="fw-bold text-capitalize"><?= $product['name']; ?>
                            <span class="float-end text-danger"><?php if ($product['trending']) {
                                                                    echo "trending";
                                                                } ?></span>
                        </h4>
                    </div>
                    <hr>
                    <div class="product-discription-small">
                        <p><?= $product['small_description']; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="orl_amt">
                                <h5 class="text-danger">Rs <s><?= $product['original_price']; ?></s></h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sel_amt">
                                <h5 class="text-success">Rs <span><?= $product['selling_price']; ?></span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group mb-3 myrangeinputtxt" >
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" class="form-control text-center bg-white input-qty" value="1" disabled aria-label="Amount (to the nearest dollar)">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row new-product-view">
                        <div class="col-md-6">
                            <button class="btn btn-primary addToCartBtn" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-danger"><i class="fa fa-heart me-2"></i>Add to WishList</button>
                        </div>
                    </div>
                    <hr>
                    <div class="product-view-discription">
                        <h6>Product Description</h6>
                        <p><?= $product['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
<?php
    } else {
        echo "Product not found";
    }
} else {
    echo "Somethings went wrong";
}
include('include/footer.php');

?>