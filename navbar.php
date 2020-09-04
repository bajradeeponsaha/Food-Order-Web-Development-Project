<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Foodistan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
            <?php if(isset($_SESSION['user'])){ ?>
              <li class="nav-item"><a href="myorder.php" class="nav-link">MyOrders</a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
              <?php }else{ ?>
             
              <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
             <li class="nav-item"><a href="admin/" class="nav-link">Admin</a></li>
              <?php } ?>  
            
          </ul>
          <?php if(isset($_SESSION['user'])){ ?>
          <ul class="navbar-nav">
            <li class="nav-item" style="margin-left: 100px; float: right; text-align: right;"><?php echo "Welcome ".$_SESSION['user']['name'] ?></li>
          </ul>
        <?php } ?>
        </div>
      </div>
    </nav>
    <!-- END nav -->