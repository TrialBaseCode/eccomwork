<?php 
include('include/header.php');  
include('functions/userfunction.php');
?>
<div class="py-3 bg-primary breadcrumb">
   <div class="container">
       <h6 class="text-white">Home / Collections</h6>
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
                            <div class="col-md-4">
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