<?php
include('includes/header.php');
if(isset($_SESSION['auth']))
{
    $_SESSION['message']="You are already logged in!";
    header("Location: index.php");
    exit(0);
}
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include('message.php');?>
               <div class="card">
                <div class="card-header">
                    <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="POST">
                    <div class="form-group mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="fname" required/>
                    </div>
                    <div class="form-group mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lname"/>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email Id</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required/>
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" required/>
                    </div>
                    <div class="form-group mb-3">
                       <button type="submit" class="btn btn-primary" name="register_btn">Create Your Account</button>
                    </div>
                    
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');

?>