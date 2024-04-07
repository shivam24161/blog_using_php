<nav class="navbar navbar-expand-lg sticky-top bg-dark text-white">
    <!-- Getting page name for setting it to active -->
    <?php $page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="col-md-3">
              <h3><i>Blogger</i></h3>
           </div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
     
        <li class="nav-item">
          <a class="nav-link text-white<?= $page == 'index.php'? 'text-dark bg-white':'' ?>" href="index.php">Home</a>
        </li>
        <!-- Category -->
        <?php
        $navbar_category="SELECT * FROM categories WHERE navbar_status='0' AND status='0' ";
        $navbar_category_run = mysqli_query($con,$navbar_category);
        if(mysqli_num_rows($navbar_category_run) > 0)
        {
        foreach($navbar_category_run as $navItems)
        {
            ?>
            <li class="nav-item">
            <a class="nav-link text-white" href="category.php?title=<?= $navItems['slug']; ?>"><?=$navItems["name"]; ?> </a>
            </li>
            <?php
        }
      }
        ?>
        <?php if(isset($_SESSION['auth_user'])) :?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" >
           <?= $_SESSION['auth_user']['user_name'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form action="allcode.php" method="POST">
                  <button type="submit" class="dropdown-item" name="logout_btn">Logout</button>
            </form>
          </ul>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link text-white<?= $page == 'login.php'? 'text-dark bg-white':'' ?>" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white<?= $page == 'register.php'? 'text-dark bg-white':'' ?>" href="register.php">Register</a>
        </li>
        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>