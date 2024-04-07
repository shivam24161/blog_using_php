<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
                        <h4 class="mt-4">Users</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                        <div class="row">
                            <div class="col-md-12">
                            <?php include('../message.php'); ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Registered User</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Roles</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query ="SELECT * from users";
                                                $query_run=mysqli_query($con,$query);
                                                if(mysqli_num_rows($query_run) > 0)
                                                {

                                                    foreach($query_run as $row)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td><?= $row['id']; ?></td>
                                                            <td><?= $row['fname']; ?></td>
                                                            <td><?= $row['lname']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td>
                                                                <?php
                                                                if($row['role_as'] == "1")
                                                                {
                                                                    echo "Admin";
                                                                }
                                                                elseif($row['role_as'] == "0")
                                                                {
                                                                    echo "User";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><a href="edit-register.php?edituser=<?=$row['id'] ?>" class="btn btn-warning">Edit</td>
                                                            <td><a href="code.php?deluser=<?=$row['id'] ?>" class="btn btn-danger">Delete</td>

                                                    </tr>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                                <tr>

                                                </tr>
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