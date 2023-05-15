<?php
include('include/header.php');
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="cpl-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body cat_list">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Images</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("categories");

                            if (mysqli_num_rows($category) > 0) {
                                foreach ($category as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item["id"]; ?></td>
                                        <td><?= $item["name"]; ?></td>
                                        <td>
                                            <img src="../uploads/<?= $item["image"]; ?>"  alt="<?= $item["name"]; ?> width="200" height="100" " >
                                        </td>
                                        <td>
                                            <?= $item['status'] == "0" ? "visible" : "hidden" ?>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
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