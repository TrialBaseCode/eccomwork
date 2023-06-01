<?php
include('include/header.php');
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">

            <div class="py-5">
                <div class="container">
                    <div class="card card-body shadow">
                        <div class="card-header bg-primary">
                            <h4 class="text-white">Order History
                                <a href="orders.php" class="btn btn-warning float-end">Back</a>
                            </h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-responsive table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Tracking No</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $orders =  getOrderHistory();

                                        if (mysqli_num_rows($orders) > 0) {
                                            foreach ($orders as $item) {
                                        ?>
                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['name']; ?></td>
                                                    <td><?= $item['tracking_no']; ?></td>
                                                    <td><?= $item['total_price']; ?></td>
                                                    <td><?= $item['created_at']; ?></td>
                                                    <td>
                                                        <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-primary">View details</a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>