<?php
	session_start();
	include '../Controller/clientC.php';
	include '../Model/client.php';

	$CC = new clientC();
	$usernames = $CC->afficherUsernames();

  if (isset($_SESSION['id']))
  {
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- web fonts -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
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
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Connecte-toi</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Se Connecter</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Creer un compte</span></li>
									</ul>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="clientlog.php" method="post">
													<input name="username" id="username1" placeholder="username" type="text" >
													<input name="password" id="password" placeholder="password" type="password">
													<div class="sign-up">
														<input type="submit" value="Sign in" onclick="return verif1()" />
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">

												<form name="myForm" id="myForm" action="ajoutclient.php" method="post">
													<input placeholder="Nom" name="nom" id="nom" type="text" required pattern="[A-Za-z]{1,30}" title="Le nom ne peut comprendre que des lettres" >
													<input placeholder="Prenom" name="prenom" id="prenom" type="text" required pattern="[A-Za-z]{1,30}" title="Le nom ne peut comprendre que des lettres">
													<input placeholder="Username" name="username" id="username"type="text" required  oninput="checkUsername()">
													<input placeholder="adresse" name="adresse" id="adresse" type="text" required>
													<input placeholder="telephone" name="tel" id="tel" type="text" required>
													<input placeholder="Email Address" name="email" id="email" type="email" required title="Votre email doit correspondre à ce format exemple@exemple.com">
													<input placeholder="Password" name="password" id="password2" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus" required >
													<input placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" oninput="check(this)"  required>

                            <script language='javascript' type='text/javascript'>
                                function check(input) {
                                    if (document.getElementById('confirm_password').value != document.getElementById('password2').value) {
                                        input.setCustomValidity('Verifiez votre mot de passe.');
                                    } else {
                                        // input is valid -- reset the error message
                                        input.setCustomValidity('');
                                    }
                                }
                            </script>

                            <script type="text/javascript">
                              var names = <?php echo $usernames ?>;
                              function checkUsername()
                              {
                                var input = document.getElementById("username");
                                if (names.indexOf(input.value) > -1 )
                                {
                                  input.setCustomValidity("nom d'utilisateur déja pris, choisissez un autre.");
                                }
                                else{
                                  input.setCustomValidity('')
                                }
                              }
                            </script>
													<div class="sign-up">
                            <input id="reg_btn" type="submit" value="Create Account"/>

													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- header modal -->
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
              <a href="back-end/table2.php" style="width:150px;"><span class="glyphicon">Dashboard Admin <i class="glyphicon glyphicon-tasks" ></i></span></a>
        <?php
            }
         ?>
         <?php
         }
        ?>
      </div>
			<div class="w3l_logo">
				<h1><a href="index.html"><center><img src="images/hightech.png"></center><span>Your store. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1">
				<form action="#" method="post" class="last">
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
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
						<li><a href="index.php">Home</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="products.html">Mobile Phones</a></li>
											<li><a href="products.html">Mp3 Players <span>New</span></a></li>
											<li><a href="products.html">Popular Models</a></li>
											<li><a href="products.html">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="products1.html">Laptop</a></li>
											<li><a href="products1.html">Desktop</a></li>
											<li><a href="products1.html">Wearables <span>New</span></a></li>
											<li><a href="products1.html"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.html">Tv</a></li>
											<li><a href="products2.html">Camera</a></li>
											<li><a href="products2.html">AC</a></li>
											<li><a href="products2.html">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li>
						<li class="w3pages"><a href="#" class="dropdown-toggle act" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="icons.php">Web Icons</a></li>
								<li><a href="codes.php" class="act">Profile</a></li>
							</ul>
						</li>
						<li><a href="mail.php">Mail Us</a></li>
						<li><a href="profile.php">Profile</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Profile</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Profile</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- short codes -->

	<div class="typo codes">
		<div class="container">
			<h3 class="agileits-title">Profile</h3>
			<div class="grid_3 grid_4">
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="modifier.php">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Nom</label>
								<div class="col-sm-8">
									<input type="text" hidden name="id" value="<?php echo $_SESSION['id']; ?>">
									<input type="text" class="form-control1" name="nom" value="<?php echo $_SESSION['nom']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="disabledinput" class="col-sm-2 control-label">Prenom</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="prenom" value="<?php echo $_SESSION['prenom']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="username" value="<?php echo $_SESSION['username']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Adresse</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="adresse" value="<?php echo $_SESSION['adresse']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Telephone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="tel" value="<?php echo $_SESSION['tel']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">E-mail</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" name="email" value="<?php echo $_SESSION['email']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Paswword</label>
								<div class="col-sm-8">
									<input type="password" class="form-control1" name="password" value="<?php echo $_SESSION['password']; ?>">
								</div>
							</div>
							<div class="modifier">
									<input type="submit" value="modifier"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<center>
			<div>
				<form method= "POST" action="ajouteravis.php">
					<select name="avis">
						<option value=""> Rate Us </option>
						<option value="excellent"> excellent </option>
						<option value="Above average"> Above average </option>
						<option value="Average"> Average </option>
						<option value="satisfiying"> satisfiying </option>
						<option value="Poor"> Poor </option>
					</select>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-sm-2 control-label">Commentaire</label>
				<div class="col-sm-8">
					<input type="text" class="form-control1" name="description">
				</div>
			</div>
	</form>
	<div class="modifier">
			<input type="submit" value="Rate"/>
	</div>
	</center>
	</div>

	<!-- //short-codes -->
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
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">careoffuture@gmail.com</a></li>
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
						<li><a href="index.html">Home</a></li>
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
<?php
} else {
	echo "<script>
	alert('Vous etes déconnecté');
	window.location.href='index.php';
	</script>";
}
 ?>
