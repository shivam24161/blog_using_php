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
                    <h4>Edit Category
                    <a href="category-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <?php
                if(isset($_GET['id']))
                {
                    $category_id=$_GET['id'];
                    $category_edit="SELECT * FROM categories WHERE id='$category_id' LIMIT 1";
                    $category_run=mysqli_query($con,$category_edit);
                    if(mysqli_num_rows($category_run)>0)
                    {
                        $row=mysqli_fetch_array($category_run);
                        ?>
                    <form action="code.php" method="POST">
                    <input type="text" name="category_id" value="<?=$row['id'] ?>"/>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>URL</label>
                            <input type="text" name="slug" class="form-control" value="<?= $row['slug'] ?>"/>
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4"
                            ><?= $row['description'] ?></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>Show on Navbar</label><br/>
                        <input type="checkbox" name="navbar_status" <?=$row["navbar_status"]=='1'?'checked':'' ?> width="70px" height="70px"/>
                        Checked= Hidden & unchecked = Visible
                          </div>
                    <div class="col-md-6 mb-3">
                        <label>Status(Show/Hide)</label><br/>
                        <input type="checkbox" name="status" <?=$row['status']== '1' ?'checked':'' ?> width="70px" height="70px"/>
                        Checked= Hidden & unchecked = Visible
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" name="category_update" class="btn btn-primary"> Update Category</button>
                    </div>
                        </div>
                    </form>
                        <?php 
                    }
                    else
                    {
                        ?>
                        <h4>No Record Found</h4>
                        <?php
                    }
                }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>