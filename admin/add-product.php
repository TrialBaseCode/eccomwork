<?php
include('include/header.php');
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exam@opt">Select Category</label>
                                <select class="form-select" id="exam@opt">
                                    <option selected>Open this select menu</option>
                                    <?php
                                    $categories = getAll("categories");
                                    if (mysqli_num_rows($categories) > 0) {
                                        foreach ($categories as $item) {
                                    ?>
                                            <option value="<?= $item["id"]; ?>"><?= $item['name']; ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "No category available";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="exam@slug">slug</label>
                                <input type="text" id="exam@slug" name="slug" class="dashed-form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="exam@smltextarea">Small Description</label>
                                <textarea name="small_description" id="exam@smltextarea" class="dashed-form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="exam@detextarea">Description</label>
                                <textarea name="description" id="exam@detextarea" class="dashed-form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="exam@op">Original Price</label>
                                <input type="text" id="exam@op" name="original_price" class="dashed-form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="exam@sp">Selling Price</label>
                                <input type="text" id="exam@sp" name="selling_price" class="dashed-form-control">
                            </div>
                            <div class="col-md-12">
                                <div class="upload_work">
                                    <label for="example@pimage">Upload Image</label>
                                    <input type="file" name="image" class="dashed-form-control" id="example@pimage">
                                </div>
                            </div>
                            <div class="row qtysp-change">
                                <div class="col-md-6">
                                    <label for="exam@qty">Quantity</label>
                                    <input type="number" id="exam@qty" name="qty" class="dashed-form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="exam@status">Status</label>
                                    <input type="checkbox" name="status" id="exam@status">
                                </div>
                                <div class="col-md-3">
                                    <label for="exam@populer">Popular</label>
                                    <input type="checkbox" name="popular" id="exam@populer">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="exam@metatil">Meta Title</label>
                                <input type="text" name="meta_title" id="exam@metatil" class="dashed-form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="exam@metatextarea">Meta Description</label>
                                <textarea name="meta_description" id="exam@metatextarea" class="dashed-form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="exam@metakeyword">Meta Keywords</label>
                                <textarea name="meta_keywords" id="exam@metakeyword" class="dashed-form-control" rows="3"></textarea>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary add_cat_btn float-end" name="add_product_btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>