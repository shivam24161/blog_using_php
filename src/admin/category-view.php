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
                    <h4>View Category
                    <a href="category-view.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Edit
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                    $category = "SELECT * FROM categories";
                    $category_run = mysqli_query($con,$category);
                    if(mysqli_num_rows($category_run) > 0)
                    {
                        foreach($category_run as $item)
                        {
                            ?>
                            <tr>
                            <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td>
                                <?php if($item['status'] == '1')
                                {
                                    echo 'Hidden';
                                }
                                else{
                                    echo 'Visible';
                                } ?></td>
                                <td>
                                    <a href="category-edit.php?id=<?= $item['id'] ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <a href="code.php?id=<?= $item['id'] ?>" class="btn btn-danger" name="category-delete">Delete</a>
                                </td>
                        </tr>
                        <?php
                        }
                        }
                        else
                        {
                        ?>
                        <tr>
                        <td colspan="5">No Record found</td>
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
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>