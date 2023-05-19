<?php 
include('include/header.php');  
include('functions/userfunction.php');
?>
<div class="py-3 bg-primary breadcrumb">
   <div class="container">
   <h6 class="text-white">
           <a class="text-white text-decoration-none" href="index.php">
            Home</a>  /
            <a  class="text-white text-decoration-none" href="categories.php">
            Collections
            </a> / 
        </h6>
   </div>
</div>
<main>
    <div class="container">
       <div class="All-innerpage-heading">
          <h4>Our Collections</h4>
       </div>
       <hr/>
          <div class="row">
                <?php
                    $categories = getAllActive("categories");

                    if(mysqli_num_rows($categories) > 0)
                    {
                        foreach($categories as $item)
                        {
                            ?>  
                            <div class="col-md-3">
                                <a href="products.php?category=<?= $item['slug']; ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                                    <div class="card collection-card">
                                        <div class="card-body">
                                            <div class="collection-card-image">
                                            <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" >
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
                    }
                    else 
                    {
                        echo "No data Available..";
                    }
                ?>
          </div>
    </div>
</main>

<?php include('include/footer.php'); ?>