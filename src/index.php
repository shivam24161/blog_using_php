<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class='text-white'>Category</h3>
                <div class="underline"></div>
            </div>
            <?php
        $homeCategory="SELECT * FROM categories WHERE navbar_status='0' AND status='0' ";
        $homeCategory_run = mysqli_query($con,$homeCategory);
        if(mysqli_num_rows($homeCategory_run) > 0)
        {
        foreach($homeCategory_run as $homeCateItem)
        {
            ?>
            <div class="col-md-3 mb-4">
            <a class="text-decoration-none" href="category.php?title=<?= $homeCateItem['slug']; ?>">
            <div class="card card-body">
            <?=$homeCateItem["name"]; ?> 
            </div>
            </a>
        </div>
            <?php
        }
      }
        ?>
        </div>
    </div>
</div>
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class='text-dark'>Blogger</h3>
                <div class="underline"></div>
                <p>
                    We provides the tutorials of different-different programming language. Stay tuned with us!
                </p>
            </div>
    </div>
    </div>
    </div>

    <!-- latest posts -->
    <div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class='text-dark'>Latest Posts</h3>
                <div class="underline"></div>
                <?php
        $homePosts="SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 12";
        $homePosts_run = mysqli_query($con,$homePosts);
        if(mysqli_num_rows($homePosts_run) > 0)
        {
        foreach($homePosts_run as $homePostItem)
        {
            ?>
            <div class="mb-4">
            <a class="text-decoration-none" href="post.php?title=<?= $homePostItem['name']; ?>">
            <div class="card card-body">
            <?=$homePostItem["name"]; ?> 
            </div>
            </a>
        </div>
            <?php
        }
      }
        ?>
            </div>
    </div>
</div>

<?php
include('includes/footer.php');

?>