<?php 
include('include/header.php'); 
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
       <div class="col-md-12">
        <?php 
        if(isset($_GET['id']))
        {
             $id = $_GET['id'];
             $category = getByID("categories", $id);

             if(mysqli_num_rows($category) > 0)
            {
                $data = mysqli_fetch_array($category);

                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                <label for="exam@name">Name</label>
                                <input type="text" id="exam@name" name="name" value="<?= $data['name'] ?>" class="dashed-form-control">
                                </div>
                                <div class="col-md-6">
                                <label for="exam@slug">slug</label>
                                <input type="text" id="exam@slug" name="slug" value="<?= $data['slug'] ?>" class="dashed-form-control">
                                </div>
                                <div class="col-md-12">
                                <label for="exam@textarea">Description</label>
                                <textarea name="description" id="exam@textarea"  class="dashed-form-control"   rows="3"><?= $data['description'] ?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="upload_work" >
                                        <label  for="example@image">Upload Image</label>
                                        <div class="img_container">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                  <input type="file"  name="image"   class="dashed-form-control"  id="example@image">
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="stay_tune_img_container">
                                                        <h4>Current Image:</h4>
                                                        <input type="hidden" name="old_image" value="<?= $data["image"] ?>">
                                                        <div class="div_img_change">
                                                            <img src="../uploads/<?= $data["image"] ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <label for="exam@metatil">Meta Title</label>
                                <input type="text" name="meta_title" id="exam@metatil" class="dashed-form-control"  value="<?= $data['meta_title'] ?>" >
                                </div>
                                <div class="col-md-12">
                                <label for="exam@metatextarea">Meta Description</label>
                                <textarea name="meta_description" id="exam@metatextarea"  class="dashed-form-control"  rows="3"><?= $data['meta_description'] ?></textarea>
                                </div>
                                <div class="col-md-12">
                                <label for="exam@metakeyword">Meta Keywords</label>
                                <textarea name="meta_keywords" id="exam@metakeyword"  class="dashed-form-control"   rows="3"><?= $data['meta_keywords'] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                <label for="exam@status">Status</label>
                                <input type="checkbox" name="status" id="exam@status" <?= $data['status']? "checked":"" ?>>
                                </div>
                                <div class="col-md-6">
                                <label for="exam@populer">Popular</label>
                                <input type="checkbox" name="popular" id="exam@populer" <?= $data['popular']? "checked":""  ?>>
                                </div>
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary add_cat_btn float-end" name="update_category_btn">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php 
            } else {
                echo "Category not found";
            }
        } else {
            echo "Id missing from url";
        }
          ?>
       </div>
    </div>
</div>

<?php include('include/footer.php'); ?>