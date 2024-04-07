<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <?php include('../message.php'); ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Category
                                        <!-- Showing no. of total category -->
                                        <?php
                                        $category_count="SELECT * from categories";
                                        $category_count_run=mysqli_query($con,$category_count);
                                        if($category_total = mysqli_num_rows($category_count_run))
                                        {
                                            echo '<h4 class="mb-0">'.$category_total.'</h4>';
                                        }
                                        else{
                                            echo '<h4 class="mb-0">0</h4>';
                                        }
                                        ?>
                                
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="category-view.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Posts
                                     <!-- Showing no. of total posts -->
                                     <?php
                                        $post_count="SELECT * from posts";
                                        $post_count_run=mysqli_query($con,$post_count);
                                        if($post_total = mysqli_num_rows($post_count_run))
                                        {
                                            echo '<h4 class="mb-0">'.$post_total.'</h4>';
                                        }
                                        else{
                                            echo '<h4 class="mb-0">0</h4>';
                                        }
                                        ?>
                                
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="post-view.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Users
                                     <!-- Showing no. of total users -->
                                     <?php
                                        $users_count="SELECT * from users";
                                        $users_count_run=mysqli_query($con,$users_count);
                                        if($users_total = mysqli_num_rows($users_count_run))
                                        {
                                            echo '<h4 class="mb-0">'.$users_total.'</h4>';
                                        }
                                        else{
                                            echo '<h4 class="mb-0">0</h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view_register.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Blocked Users
                                        <!-- Showing total no. of blocked users-->
                                     <?php
                                        $blocked_user_count="SELECT * from users where status = '1' ";
                                        $blocked_user_count_run=mysqli_query($con,$blocked_user_count);
                                        if($blocked_total = mysqli_num_rows($blocked_user_count_run))
                                        {
                                            echo '<h4 class="mb-0">'.$blocked_total.'</h4>';
                                        }
                                        else{
                                            echo '<h4 class="mb-0">0</h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view_register.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>