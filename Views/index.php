<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
  include '../Controller/clientC.php';
  session_start();
  $CC = new clientC();
  $usernames = $CC->afficherUsernames();
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
	<!-- header modal -->

	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Sign In</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Create account</span></li>
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
													<input placeholder="address" name="adresse" id="adresse" type="text" required>
													<input placeholder="Phone number" name="tel" id="tel" type="text" required>
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
            <a href='logout.php' style="width:150px;"><span class="glyphicon">Sign out <i class="glyphicon glyphicon-log-out" ></i></span></a>
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
						<li><a href="index.php" class="act">Home</a></li>
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
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="icons.php">Web Icons</a></li>
								<li><a href="codes.php">Short Codes</a></li>
							</ul>
						</li>
						<li><a href="mail.php">Mail Us</a></li>
            <?php if (isset($_SESSION['id']))
            {
            ?>
                <li><a href="profile.php">Profile</a></li>
              <?php
             }
            ?>
					</ul>
          </div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<h3>Electronic Store, <span>Special Offers</span></h3>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>
					<!-- pop-up-box -->
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Mobiles</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Audio</a></li>
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Computer</a></li>
						<li role="presentation"><a href="#tv" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">Household</a></li>
						<li role="presentation"><a href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Kitchen</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Mobile Phone1</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND380</span> <i class="item_price">TND350</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Mobile Phone1" />
											<input type="hidden" name="amount" value="350.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Mobile Phone2</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND330</span> <i class="item_price">TND302</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Mobile Phone2" />
											<input type="hidden" name="amount" value="302.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<img src="images/7.jpg" alt=" " class="img-responsive" />
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<img src="images/6.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Mobile Phone3</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND250</span> <i class="item_price">TND245</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Mobile Phone3" />
											<input type="hidden" name="amount" value="245.00"/>
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Speakers</a></h5>
										<p><span>TND320</span> <i class="item_price">TND250</i></p>
									<div class="simpleCart_shelfItem">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Speakers" />
											<input type="hidden" name="amount" value="250.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Headphones</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TNDTND180</span> <i class="item_price">TNDTND150</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Headphones" />
											<input type="hidden" name="amount" value="150.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<img src="images/10.jpg" alt=" " class="img-responsive" />
										<img src="images/8.jpg" alt=" " class="img-responsive" />
										<img src="images/9.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Audio Player</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TNDTND220</span> <i class="item_price">TNDTND180</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Audio Player" />
											<input type="hidden" name="amount" value="180.00"/>
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Laptop</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TNDTND880</span> <i class="item_price">TNDTND850</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Laptop" />
											<input type="hidden" name="amount" value="850.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Notebook</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TNDTND290</span> <i class="item_price">TNDTND280</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Notebook" />
											<input type="hidden" name="amount" value="280.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Kid's Toy</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TNDTND120</span> <i class="item_price">TNDTND80</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Kid's Toy" />
											<input type="hidden" name="amount" value="80.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Refrigerator</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND950</span> <i class="item_price">TND820</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Refrigerator" />
											<input type="hidden" name="amount" value="820.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">LED Tv</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND700</span> <i class="item_price">TND680</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="LED Tv"/>
											<input type="hidden" name="amount" value="680.00"/>
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										<img src="images/14.jpg" alt=" " class="img-responsive" />
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Washing Machine</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND520</span> <i class="item_price">TND510</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Washing Machine" />
											<input type="hidden" name="amount" value="510.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Grinder</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND460</span> <i class="item_price">TND450</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Grinder" />
											<input type="hidden" name="amount" value="450.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Water Purifier</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>TND390</span> <i class="item_price">TND350</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Water Purifier" />
											<input type="hidden" name="amount" value="350.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<img src="images/19.jpg" alt=" " class="img-responsive" />
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										<img src="images/18.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">Coffee Maker</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>250</span> <i class="item_price">TND220</i></p>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="w3ls_item" value="Coffee Maker" />
											<input type="hidden" name="amount" value="220.00" />
											<button type="submit" class="w3ls-cart">Add to cart</button>
										</form>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- modal-video -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>The Best Mobile Phone 3GB</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$350</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Mobile Phone1">
									<input type="hidden" name="amount" value="350.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/9.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Multimedia Home Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$180</span> <i class="item_price">$150</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Headphones">
									<input type="hidden" name="amount" value="150.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/11.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Quad Core Colorful Laptop</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia  deserunt.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$880</span> <i class="item_price">$850</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Laptop">
									<input type="hidden" name="amount" value="850.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Cool Single Door Refrigerator </h4>
							<p>Duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$950</span> <i class="item_price">$820</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Mobile Phone1">
									<input type="hidden" name="amount" value="820.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/17.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>New Model Mixer Grinder</h4>
							<p>Excepteur sint occaecat laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$460</span> <i class="item_price">$450</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Mobile Phone1">
									<input type="hidden" name="amount" value="450.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/36.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Dry Vacuum Cleaner</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner">
									<input type="hidden" name="amount" value="920.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/37.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Kitchen & Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="w3ls_item" value="Induction Stove">
									<input type="hidden" name="amount" value="250.00">
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="products.html">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom1 -->
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/21.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t1.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Laura</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t2.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Michael</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/t3.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Rosy</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script>
						<script>
							$('.example1').wmuSlider();
						</script>
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/20.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/25.jpg" alt=" " class="img-responsive" />
							<img src="images/23.jpg" alt=" " class="img-responsive" />
							<img src="images/24.jpg" alt=" " class="img-responsive" />
							<img src="images/22.jpg" alt=" " class="img-responsive" />
							<img src="images/26.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Laptops</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$520</span> <i class="item_price">$500</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Red Laptop">
								<input type="hidden" name="amount" value="500.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/27.jpg" alt=" " class="img-responsive" />
							<img src="images/28.jpg" alt=" " class="img-responsive" />
							<img src="images/29.jpg" alt=" " class="img-responsive" />
							<img src="images/30.jpg" alt=" " class="img-responsive" />
							<img src="images/31.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Black Phone</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$380</span> <i class="item_price">$370</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Black Phone">
								<input type="hidden" name="amount" value="370.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/34.jpg" alt=" " class="img-responsive" />
							<img src="images/33.jpg" alt=" " class="img-responsive" />
							<img src="images/32.jpg" alt=" " class="img-responsive" />
							<img src="images/35.jpg" alt=" " class="img-responsive" />
							<img src="images/36.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Kids Toy</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$150</span> <i class="item_price">$100</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Kids Toy">
								<input type="hidden" name="amount" value="100.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/37.jpg" alt=" " class="img-responsive" />
							<img src="images/38.jpg" alt=" " class="img-responsive" />
							<img src="images/39.jpg" alt=" " class="img-responsive" />
							<img src="images/40.jpg" alt=" " class="img-responsive" />
							<img src="images/41.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Induction Stove</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$280</span> <i class="item_price">$250</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3ls_item" value="Induction Stove">
								<input type="hidden" name="amount" value="250.00">
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint:480,
									visibleItems: 1
								},
								landscape: {
									changePoint:640,
									visibleItems:2
								},
								tablet: {
									changePoint:768,
									visibleItems: 3
								}
							}
						});

					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands -->
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
