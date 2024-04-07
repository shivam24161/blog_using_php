<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="conatiner-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-12">
           <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Add Post
                    <a href="post-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-md-12 mb-3">
                            <label>Category List</label>
                            <?php
                            $category = "SELECT * FROM  categories where status='0' ";
                            $category_run = mysqli_query($con,$category);
                            if(mysqli_num_rows($category_run ) > 0)
                            {
                                ?>
                                <select name="category_id" required class="form-control">
                                    <option value="">--Select Category</option>
                                    <?php
                                    foreach($category_run as $categoryitem)
                                         {
                                          ?>
                                         <option value="<?=$categoryitem['id']?>"><?=$categoryitem['name']?></option>
                                         <?php
                                         }
                                    ?>
                               </select>
                               <?php
                            }
                            else{
                                ?>
                                <h5>No category available</h5>
                                <?php
                            }
                            ?>
                          
                            </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required/>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>URL</label>
                            <input type="text" name="slug" class="form-control" required/>
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"/>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>Post Status</label><br/>
                            <input type="checkbox" name="status"  width="70px" height="70px"/>
                            Checked= Hidden & unchecked = Visible
                            </div>
                            <div class="col-md-12 mb-3">
                            <button type="submit" name="post-add" class="btn btn-primary">Add Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>