<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <!-- Getting latest posts on the HomePage -->
            <?php
        if(isset($_GET['title']))
        {
            $slug=mysqli_real_escape_string($con,$_GET['title']);
            $posts="SELECT * FROM posts WHERE slug='$slug' ";
            $posts_run=mysqli_query($con,$posts);
       
            if(mysqli_num_rows($posts_run) > 0)
            {
                    foreach($posts_run as $postItems)
                    {
                    ?>
                    <div class="card shadow-sm mb-4">
                        <div class="card-header">
                            <h5><?=$postItems['name'];?></h5>
                    </div>
                    <div class="card-body">
                    <label class="text-dark me-2">Posted On:<?=date('d-M-Y',strtotime($postItems['created_at'])); ?></label>
                    <hr>
                    <?php 
                    if($postItems['image'] != null ) {?>
                    <img src="uploads/posts/<?= $postItems['image']?>" class="w-25" alt="<?=$postItems['name'];?>"/>
                    <?php
                    }
                    else{
                        
                    }
                    ?>
                
                    <div>
                        <?=$postItems['description'];?>
                    </div>
                    </div>
                    </div>
                    <?php
                    }
                
            }    
            else
            {
                ?>
                    <h4>No Such Post Found</h4>
                <?php
            }
        }
        else{
            ?>
            <h4>No such Url found</h4>
            <?php
        }
        ?>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');

?>