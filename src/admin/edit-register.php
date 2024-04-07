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
                    <h4>Update User/Admin Details
                    <a href="view_register.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <?php
                if(isset($_GET['edituser']))
                {
                    $user_id=$_GET['edituser'];
                    $user_edit="SELECT * FROM users WHERE id='$user_id' LIMIT 1";
                    $user_edit_run=mysqli_query($con,$user_edit);
                    if(mysqli_num_rows($user_edit_run)>0)
                    {
                        $row=mysqli_fetch_array($user_edit_run);
                        ?>
                    <form action="code.php" method="POST">
                    <input type="text" name="edit_user_id" value="<?=$row['id'] ?>"/>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control" value="<?= $row['fname'] ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="<?= $row['lname'] ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>"/>
                            </div>
                            <div class="col-md-12 mb-3">
                            <label>Role: [0 = User & 1 = Admin]</label>
                            <input type="text" name="role_as" class="form-control" value="<?= $row['role_as'] ?>"/>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label>User Status</label><br/>
                        <input type="checkbox" name="user_status" <?=$row["status"]=='1'?'checked':'' ?> width="70px" height="70px"/>
                        Checked= Block & unchecked= Unblock
                          </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" name="user_update" class="btn btn-primary"> Update User</button>
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