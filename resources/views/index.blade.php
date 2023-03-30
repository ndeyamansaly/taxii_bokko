	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Taxi</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('front/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('front/css/main.css')}}">
		</head>
		<body>	

			  <header id="header">
				<style>
					.chooseus {
						margin-bottom: 100px;
					}
					.separator {
						border-top: 1px solid #1c0202;
						margin: 50px 0;
		}
				</style>
		  		<div class="header-top">
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.blade.php"><img src="img/" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index.blade.php">Acceuil</a></li>
							  <li><a href="about.html">A propos</a></li>
							  <li class="menu-has-children"><a href="">Passagers</a>
							  	<ul>
									<li><a href="passager.blade.php">comment sa marche</a></li>
									<li><a href="inscriptionP.blade.php">nos prix et engagement</a></li>
								</ul>
							  <li class="menu-has-children"><a href="">Chauffeurs</a>
							  	<ul>
									<li><a href="passager.blade.php">comment sa marche</a></li>
									<li><a href="inscription.blade.php">nos prix et engagement</a></li>
								</ul>
							  <li class="menu-has-children"><a href="">Business</a>
							    <ul>
							      <li><a href="passager.html">comment sa marche</a></li>
							      <li><a href="inscription.html">nos prix et engagement</a></li>
							        </ul>
							      </li>					              
							    </ul>
							  </li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">BIENVENUE CHEZ FASTRAPID</h6>
							<p class="pt-10 pb-10 text-white">
								Le vtc qui vous raccompagne en toute securite dans tous vos trajets
							</p>
							<a href="https://itunes.apple.com/fr/app/" target="_blank">
								<img class="app-store-png-logo-33123.png" src="/build/website/images/app-store-download.9e8574bd.png" title="Télécharger dans l'App Store" alt="Télécharger dans l'App Store">
							</a>
							<a href="https://play.google.com/store/apps/" target="_blank">
								<img class="img-fluid" src="/build/website/images/google-play-download.6d25cb29.png" title="Télécharger dans Google Play" alt="Télécharger dans Google Play">
							</a>
							
							<!--<a href="#" class="primary-btn text-uppercase">Call for taxi</a>-->
						</div>
																	
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row section-title">
						<h1>Comment sa marche ?</h1>
					</div>
					<div class="row">
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-map-marker"></span>
							<p>
								Activez l'application FASTRAPID
								Saississez votre destination via geolocalisation
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<p>
								Votre chauffeur FASTRAPID vous recupere et vous depose
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-star-half"></span>
							<p>
								tout le trajet avec vous 
							</p>
							
						</div>												
					</div>	
				</div>	
			</section>
			<!-- End services Area -->
			
			<!-- Start image-gallery Area -->
			<section class="chooseus spad">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
								<p class="flotte" style="float:right;  margin-right: 20px;">
								<img src="{{asset('front/img/g6.jpg')}}" alt ></p>
								
								<p> <h1>A propos de FASTRAPID</h1>
									<h2>Le Meilleur choix</h2>
									FASTRAPID est le service vtc</p>
							</div>

						<!-- href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt="">-->
						</div>					
						
					</div>					
				</div>
			</section>
			<!-- End image-gallery Area -->

			<section class="chooseus spad">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title">
								<p class="flotte" style="float:left;  margin-right: 20px;">
								<img src="{{asset('front/img/service1.jpg')}}" alt ></p>
								
								<p> 
									Simplifiez vos deplacement
									Nos solutions peuvent resourdre a tous vos problemes  
								</p>
							</div>

						
						</div>					
						
					</div>					
				</div>
			</section>
			



		
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<a href="index.html"><img src="img/" alt="" title="" /></a>
								<h6>Telecharger l'application FASTRAPID</h6>
								<a href="https://itunes.apple.com/fr/app/" target="_blank">
									<img class="app-store-png-logo-33123.png" src="/build/website/images/app-store-download.9e8574bd.png" title="Télécharger dans l'App Store" alt="Télécharger dans l'App Store">
								</a>
								<a href="https://play.google.com/store/apps/" target="_blank">
									<img class="img-fluid" src="/build/website/images/google-play-download.6d25cb29.png" title="Télécharger dans Google Play" alt="Télécharger dans Google Play">
								</a>

							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation</h6>
								<ul>
									<li><a href="#">Acceuil</a></li>
									<li><a href="#">Passagers</a></li>
									<li><a href="#">Chauffeurs</a></li>
									<li><a href="#">Business</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>FASTRAPID</h6>
								<ul>
									<li><a href="#">Mon Compte</a></li>
									<li><a href="#">Mes courses</a></li>
									<li><a href="#">CGV</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Contact</h6>
								
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
							
								</div>
							</div>
						</div>							
	

										
									
								
							
						
						<p class="mt-80 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
				<img class="footer-bottom" src="img/footer-bottom.png" alt="">
			</footer>	
			<!-- End footer Area -->	

			<script src="{{asset('front/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('front/js/easing.min.js')}}"></script>			
			<script src="{{asset('front/js/hoverIntent.js')}}"></script>
			<script src="{{asset('front/js/superfish.min.js')}}"></script>	
			<script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>	
 			<script src="{{asset('front/js/jquery-ui.js')}}"></script>								
			<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>							
			<script src="{{asset('front/js/mail-script.js')}}"></script>	
			<script src="{{asset('front/js/main.js')}}"></script>	
		</body>
	</html>