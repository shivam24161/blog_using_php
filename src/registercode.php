<?php
session_start();
include('admin/config/dbcon.php');
if(isset($_POST['register_btn']))
{
   $fname=mysqli_real_escape_string($con,$_POST['fname']);
   $lname=mysqli_real_escape_string($con,$_POST['lname']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $password=mysqli_real_escape_string($con,$_POST['password']);
  
    $checkemail="SELECT email from users WHERE email='$email'";
    $checkemail_run = mysqli_query($con,$checkemail);
    if(mysqli_num_rows($checkemail_run) > 0)
    {
        //Email already exists
        $_SESSION['message']="Email already exists";
        header("Location: register.php");
        exit(0);
    }
    else
    {
        $user_query="INSERT INTO users (fname , lname , email , password ) VALUES ('$fname','$lname','$email','$password')";
        $user_query_run = mysqli_query($con, $user_query);
        if($user_query_run)
        {
            $_SESSION['message']="Registered successfully";
            header("Location: login.php");
            exit(0);
        }
        else{
            $_SESSION['message']="Something went wrong";
            header("Location: register.php");
            exit(0);
        }
    }


}
else{
    header("Location: register.php");
    exit(0);
}
?>