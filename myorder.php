<?php include "dbconnect.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Orders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

	<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">foodistan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-news" class="nav-link">News</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
          </ul>
        </div>
      </div>
    </nav>
<section class="site-section bg-light" id="section-contact">
<div class="container">
	<div class="row">
		<div class="col-md-12 mb-5 site-animate">
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>Sl No.</th>
              <th>Food Name</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Phone</th>
              <th>Delivery Address</th>
              <th>Bill</th>
            </tr>
          </thead>
          <tbody>
            <?php 
if(!isset($_SESSION['user'])){
  header("location: login.php");
}
$uid=$_SESSION['user']['id'];            
$sql="SELECT * FROM `orders` WHERE user_id='$uid'";
$qry=mysqli_query($con,$sql);
$sl=1;
while($bag=mysqli_fetch_array($qry)){
  $itemid=$bag['food_id'];
  $sql="SELECT name FROM foods WHERE id='$itemid'";
  $qry=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($qry);
            ?>
            <tr>
              <td><?php echo $sl; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $bag['quantity']; ?></td>
              <td><?php echo $bag['total']; ?></td>
              <td><?php echo $bag['phone']; ?></td>
              <td><?php echo $bag['delv_add']; ?></td>
              <?php if($bag['status']=='done'){ ?>
              <td><a href="generatebill.php?oid=<?php echo $bag['id'] ?>">View Bill</a></td>
            <?php }else{ ?>
              <td>Payment not Completed</td>
             <?php } ?> 
            </tr>
  <?php $sl++; } ?>          
          </tbody>
        </table>
    </div>
	</div>
</div>
</section>
<!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>
</body>
</html>