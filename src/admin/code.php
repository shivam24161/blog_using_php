<?php
include('authentication.php');
// Add Post
if(isset($_POST['post-add']))
{
    $category_id=$_POST['category_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    // Rename this Image
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename=$image_extension;
    $status= $_POST['status'] == true ? '1':'0';      
    $query = "INSERT INTO posts (category_id,name,slug,description,image,status) 
    VALUES('$category_id','$name','$slug','$description','$filename','$status')";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/posts/'.$filename);
        $_SESSION['message']="Post created successfully";
        header("Location: post-add.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location: post-add.php");
        exit(0);
    }
}

// Edit category
if(isset($_POST['category_update']))
{
    $category_id=$_POST['category_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $navbar_status= $_POST['navbar_status'] == true ? '1':'0';
    $status= $_POST['status'] == true ? '1':'0';   
    $query="UPDATE categories SET name='$name',slug='$slug',description='$description',navbar_status='$navbar_status',status='$status' WHERE id='$category_id' ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['message']="Category Updated successfully";
        header("Location: category-add.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location: category-add.php");
        exit(0);
    }
}

// Edit Post
if(isset($_POST['post_update']))
{
    $post_id=$_POST['post_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    // Rename this Image
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename=$image_extension;
    $status= $_POST['status'] == true ? '1':'0';   
    $query="UPDATE posts SET name='$name',slug='$slug',description='$description',image='$filename',status='$status' WHERE id='$post_id' ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/posts/'.$filename);
        $_SESSION['message']="Post Updated successfully";
        header("Location: post-view.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Post not updated!, Kindly Recheck.";
        header("Location: post-view.php");
        exit(0);
    }
}
// Delete Post
if(isset($_GET['delete']))
{
    $post_id=$_GET['delete'];
    $post_delete="DELETE FROM posts WHERE id='$post_id' ";
    $post_run=mysqli_query($con, $post_delete);
    if( $post_run)
    {
        $_SESSION['message']="Post deleted successfully";
        header("Location: post-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Something went wrong";
        header("Location: post-view.php");
        exit(0);
    }
}

// Delete User
if(isset($_GET['deluser']))
{
    $user_id=$_GET['deluser'];
    $user="DELETE FROM users where id='$user_id'";
    $user_run=mysqli_query($con,$user);
    if($user_run)
    {
        $_SESSION['message']="User deleted successfully";
        header("Location: view_register.php");
        exit(0);
    }
    else{
        $_SESSION['message']="User not deleted . Please try again!";
        header("Location: view_register.php");
        exit(0);
    }
}

// Update User Details
if(isset($_POST['user_update']))
{
    $user_id=$_POST['edit_user_id'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $role_as=$_POST['role_as'];
    $user_status= $_POST['user_status'] == true ? '1':'0';   
    $query="UPDATE users SET fname='$fname',lname='$lname',email='$email',role_as='$role_as',status='$user_status' WHERE id='$user_id' ";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['message']="User Details Updated successfully";
        header("Location: view_register.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong , Details not Updateed!";
        header("Location: view_register.php");
        exit(0);
    }
}

// Delete Category
if(isset($_GET['id']))
{
    $category_id=$_GET['id'];
    $category_delete="DELETE FROM categories WHERE id='$category_id'";
    $category_run=mysqli_query($con,$category_delete);
    if($category_run)
    {
        $_SESSION['message']="Category deleted successfully";
        header("Location: category-view.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location: category-view.php");
        exit(0);
    }
}

// Add category
if(isset($_POST['category_add']))
{
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $navbar_status= $_POST['navbar_status'] == true ? '1':'0';
    $status= $_POST['status'] == true ? '1':'0';
    $query="INSERT INTO categories (name,slug,description,navbar_status,status) VALUES(
        '$name','$slug','$description','$navbar_status','$status'
    )";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['message']="Category added successfully";
        header("Location: category-add.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Something went wrong";
        header("Location: category-add.php");
        exit(0);
    }
}
?>