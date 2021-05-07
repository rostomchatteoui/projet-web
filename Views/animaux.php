<?php
	include 'imports.php';
  session_start();
  $CC = new clientC();
  $usernames = $CC->afficherUsernames();
	$animalC = new animalC();
	$tous= $animalC->afficherAnimauxClient($_SESSION['id']);
	$chiens= $animalC->afficherChien($_SESSION['id']);
	$chats= $animalC->afficherChat($_SESSION['id']);
	$autres= $animalC->afficherAutre($_SESSION['id']);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icone.ico">
<title>High-Tech-Info</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="controle.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown -->
<link rel="stylesheet" href="rating.css" />
<link="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //js -->
<!-- web fonts -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
  <!-- header -->
  <div class="header" id="home1">
    <div class="container">


      <div class="w3l_login">
        <?php if(!isset($_SESSION['id'])){ ?>
          <script>
            $('#myModal88').modal('show');
          </script>
        <?php } else
        {
        ?>
            <a href='logout.php' style="width:150px;"><span class="glyphicon">Se Déconnecter <i class="glyphicon glyphicon-log-out" ></i></span></a>
        <?php
            if($_SESSION['role'] == "admin"){
          ?>
              <a href="back-end/index.php" style="width:150px;"><span class="glyphicon">Dashboard Admin <i class="glyphicon glyphicon-tasks" ></i></span></a>
        <?php
            }
         ?>
         <?php
         }
        ?>
      </div>

			<div class="w3l_logo">
				<h1><a href="index.php"><center><img src="images/hightech.png"></center><span>Your store. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="search">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
  					<ul class="nav navbar-nav">
  						<li><a href="index.php">Accueil</a></li>
              <?php if (isset($_SESSION['id']))
              {
              ?>
                  <li><a href="profile.php">Mon profil</a></li>
		  						<li><a class="act" class="act" href="animaux.php">Mes animaux</a></li>
		  						<li><a href="ajouterAnimal.php">Ajouter Animal</a></li>
                <?php
               }
              ?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-pills nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Tous</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Chiens</a></li>
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Chats</a></li>
						<li role="presentation"><a href="#tv" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">Autres animaux</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<?php foreach ($tous as $t){ ?>
									<div class="col-md-4 agile_ecommerce_tab_left">
										<div class="hs-wrapper">
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/<?php echo $t['type'] ?>.png" alt=" " class="img-responsive" />
										</div>
										<h5><a href="single.html"><?php echo $t['nom'] ?></a></h5>
										<div class="simpleCart_shelfItem">
											<i class="item_price"><?php echo $t['type'] ?> | <?php echo $t['race'] ?></i></p>
											<form action="modifierAnimal.php" method="Post">
												<center>
													<div class="modifier">
														<input type="text" value="<?php echo $t['id'] ?>" hidden name="id">
														<input type="submit" value="Modifier" class="w3ls-cart">
													</div>
												</center>
											</form>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
							<?php foreach ($chiens as $c) {
								?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chien.png" alt=" " class="img-responsive" />
									</div>
									<h5><a href="single.html"><?php echo $c['nom'] ?></a></h5>
									<div class="simpleCart_shelfItem">
										<i class="item_price"><?php echo $c['type'] ?> | <?php echo $c['race'] ?></i></p>
										<form action="modifierAnimal.php" method="Post">
											<center>
												<div class="modifier">
													<input type="text" value="<?php echo $c['id'] ?>" hidden name="id">
													<input type="submit" value="Modifier" class="w3ls-cart">
												</div>
											</center>
										</form>
									</div>
								</div>
								<?php
							} ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<?php
								foreach ($chats as $ch) {
									?>
									<div class="col-md-4 agile_ecommerce_tab_left">
										<div class="hs-wrapper">
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
											<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Chat.png" alt=" " class="img-responsive" />
										</div>
										<h5><a href="single.html"><?php echo $ch['nom'] ?></a></h5>
										<div class="simpleCart_shelfItem">
											<i class="item_price"><?php echo $ch['type'] ?> | <?php echo $ch['race'] ?></i></p>
											<form action="modifierAnimal.php" method="Post">
												<center>
													<div class="modifier">
														<input type="text" value="<?php echo $ch['id'] ?>" hidden name="id">
														<input type="submit" value="Modifier" class="w3ls-cart">
													</div>
												</center>
											</form>
										</div>
									</div>
									<?php
								} ?>
							</div>
						</div>
						<?php
						foreach ($autres as $a) {
							?>
							<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
								<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
										<img style="background-color: rgb(300, 300, 300);" src="back-end/images/icon/Autre.png" alt=" " class="img-responsive" />
									</div>
									<h5><a href="single.html"><?php echo $a['nom'] ?></a></h5>
									<div class="simpleCart_shelfItem">
										<i class="item_price"><?php echo $a['type'] ?> | <?php echo $a['race'] ?></i></p>
										<form action="modifierAnimal.php" method="Post">
											<center>
												<div class="modifier">
													<input type="text" value="<?php echo $a['id'] ?>" hidden name="id">
													<input type="submit" value="Modifier" class="w3ls-cart">
												</div>
											</center>
										</form>
									</div>
								</div>
								</div>
							</div>
							<?php
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>you can reach us through this also .</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>23 Avenue habib chaker, <span>Mourouj 3.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">High-Tech-Info@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+216 54 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info">
						<li><a href="about.html">About Us</a></li>
						<li><a href="mail.html">Contact Us</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="products.html">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info">
						<li><a href="products.html">Mobiles</a></li>
						<li><a href="products1.html">Laptops</a></li>
						<li><a href="products.html">Purifiers</a></li>
						<li><a href="products1.html">Wearables</a></li>
						<li><a href="products2.html">Kitchen</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.html">Today's Deals</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        		}
        	}
        });
    </script>
	<!-- //cart-js -->
</body>
</html>
