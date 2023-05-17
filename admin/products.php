<?php
include('include/header.php');
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="cpl-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products</h4>
                </div>
                <div class="card-body cat_list">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Images</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $products = getAll("products");

                            if (mysqli_num_rows($products) > 0) {
                                foreach ($products as $item) {
                            ?>
                                    <tr>
                                        <td>
                                            <div class="way"><?= $item["id"]; ?></div>
                                        </td>
                                        <td>
                                            <div class="way"><?= $item["name"]; ?></div>
                                        </td>
                                        <td>
                                            <div class="div_img">
                                                <img src="../uploads/<?= $item["image"]; ?>" alt="<?= $item["name"]; ?>  ">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="way">
                                                <?= $item['status'] == "0" ? "visible" : "hidden" ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="way">
                                                <a href="edit-product.php?id=<?= $item["id"]; ?>" class="btn btn-primary">Edit</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="way">
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="product_id" value="<?= $item["id"]; ?>">
                                                    <button type="submit" class="btn btn-danger" name="delete_product_btn">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No record found";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>