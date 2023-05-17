<?php
include('include/header.php');
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = getById("products",$id);

                if (mysqli_num_rows($product) > 0) {

                    $data = mysqli_fetch_array($product);
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Product</h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="exam@opt">Select Category</label>
                                            <select class="form-select" name='category_id' id="exam@opt" required>
                                                <option selected>Open this select menu</option>
                                                <?php
                                                $categories = getAll("categories");
                                                if (mysqli_num_rows($categories) > 0) {
                                                    foreach ($categories as $item) {
                                                ?>
                                                        <option value="<?= $item["id"]; ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : '' ?>><?= $item['name']; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo "No category available";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                        <div class="col-md-6">
                                            <label for="exam@name">Name</label>
                                            <input type="text" id="exam@name" value="<?= $data['name']; ?>" name="name" class="dashed-form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exam@slug">slug</label>
                                            <input type="text" id="exam@slug" value="<?= $data['slug']; ?>" name="slug" class="dashed-form-control" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exam@smltextarea">Small Description</label>
                                            <textarea name="small_description" id="exam@smltextarea" class="dashed-form-control" rows="3" required><?= $data['small_description']; ?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exam@detextarea">Description</label>
                                            <textarea name="description" id="exam@detextarea" class="dashed-form-control" rows="3" required><?= $data['description']; ?></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exam@op">Original Price</label>
                                            <input type="text" id="exam@op" name="original_price" value="<?= $data['original_price']; ?>" class="dashed-form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exam@sp">Selling Price</label>
                                            <input type="text" id="exam@sp" name="selling_price" value="<?= $data['selling_price']; ?>" class="dashed-form-control" required>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="upload_work">
                                                <label for="example@pimage">Upload Image</label>
                                                <input type="hidden" name="old_image" value="<?= $data["image"] ?>">
                                                <input type="file" name="image" class="dashed-form-control" id="example@pimage">
                                                <label for="example@pimageyy">Current Image</label>
                                                <div class="div_img_change">
                                                    <img src="../uploads/<?= $data["image"] ?>" alt="product image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row qtysp-change">
                                            <div class="col-md-6">
                                                <label for="exam@qty">Quantity</label>
                                                <input type="number" id="exam@qty" name="qty"  value="<?= $data['qty']; ?>" class="dashed-form-control" required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="exam@status">Status</label>
                                                <input type="checkbox" name="status" id="exam@status"  value="<?= $data['status']; ?>" >
                                            </div>
                                            <div class="col-md-3">
                                                <label for="exam@populer">Trending</label>
                                                <input type="checkbox" name="trending" id="exam@populer" value="<?= $data['trending']; ?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exam@metatil">Meta Title</label>
                                            <input type="text" name="meta_title" id="exam@metatil" class="dashed-form-control"  value="<?= $data['meta_title']; ?>" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exam@metatextarea">Meta Description</label>
                                            <textarea name="meta_description" id="exam@metatextarea" class="dashed-form-control" rows="3" required><?= $data['meta_description']; ?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="exam@metakeyword">Meta Keywords</label>
                                            <textarea name="meta_keywords" id="exam@metakeyword" class="dashed-form-control" rows="3" required><?= $data['meta_keywords']; ?></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary add_cat_btn float-end" name="update_product_btn" required>Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                } else {
                    echo "Product not found for given id";
                }
            }
             else {
                echo "id missing from url";
            }
            ?>

        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>