<?php 
include('include/header.php'); 
include('../middleware/adminmiddleware.php');
?>


<div class="container-fluid py-4">
    <div class="row">
       <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <h4>Add Category</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                        <label for="exam@name">Name</label>
                        <input type="text" id="exam@name" name="name" class="dashed-form-control">
                        </div>
                        <div class="col-md-6">
                        <label for="exam@slug">slug</label>
                        <input type="text" id="exam@slug" name="slug" class="dashed-form-control">
                        </div>
                        <div class="col-md-12">
                        <label for="exam@textarea">Description</label>
                        <textarea name="description" id="exam@textarea"  class="dashed-form-control"  rows="3"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="upload_work" >
                                <label  for="example@image">Upload Image</label>
                                <input type="file"  name="image"   class="dashed-form-control" id="example@image">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <label for="exam@metatil">Meta Title</label>
                        <input type="text" name="meta_title" id="exam@metatil" class="dashed-form-control">
                        </div>
                        <div class="col-md-12">
                        <label for="exam@metatextarea">Meta Description</label>
                        <textarea name="meta_description" id="exam@metatextarea"  class="dashed-form-control"  rows="3"></textarea>
                        </div>
                        <div class="col-md-12">
                        <label for="exam@metakeyword">Meta Keywords</label>
                        <textarea name="meta_keywords" id="exam@metakeyword"  class="dashed-form-control"  rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                        <label for="exam@status">Status</label>
                        <input type="checkbox" name="status" id="exam@status">
                        </div>
                        <div class="col-md-6">
                        <label for="exam@populer">Popular</label>
                        <input type="checkbox" name="popular" id="exam@populer">
                        </div>
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-primary add_cat_btn float-end" name="add_category_btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
       </div>
    </div>
</div>

<?php include('include/footer.php'); ?>