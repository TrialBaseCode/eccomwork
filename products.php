<?php
include('include/header.php');
include('functions/userfunction.php');

// error com: Warning: Undefined array key  or Trying to access array offset on value of type null
if(isset($_GET['category']))
{
$category_slug = $_GET['category'];
$category_data = getBySlugActive("categories", $category_slug);
$category = mysqli_fetch_array($category_data);

    if($category)
       {

            $cid = $category['id'];

            ?>
            <div class="py-3 bg-primary breadcrumb">
                <div class="container">
                    <h6 class="text-white">
                    <a class="text-white text-decoration-none" href="index.php">
                        Home</a>  /
                        <a  class="text-white text-decoration-none" href="categories.php">
                        Collections
                        </a> / 
                        <span class="text-orange"><?= $category['name']; ?></span>
                    </h6>
                </div>
            </div>
            <main>
                <div class="container">
                    <div class="All-innerpage-heading">
                        <h4><?= $category['name']; ?></h4>
                    </div>
                    <hr />
                    <div class="row">
                        <?php
                        $products = getAProductByCategory("products", $cid);

                        if (mysqli_num_rows($products) > 0) {
                            foreach ($products as $item) {
                        ?>
                                <div class="col-md-3">
                                    <a href="javascript:void(0)" rel="noopener noreferrer" class="text-decoration-none">
                                        <div class="card collection-card">
                                            <div class="card-body">
                                                <div class="collection-card-image">
                                                    <img src="uploads/<?= $item['image']; ?>" alt="Product image<?= $item['name']; ?>">
                                                </div>
                                                <div class="colection-card-heading">
                                                    <h4><?= $item['name'];  ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                        } else {
                            echo "No data Available..";
                        }
                        ?>
                    </div>
                </div>
            </main>

        <?php 
        } else {
            echo "Somethings went wrong";
        }
}
else {
    echo "Somethings went wrong";
}
include('include/footer.php');

?>