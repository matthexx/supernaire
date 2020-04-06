<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Supernaire | Investment</title>
		<meta charset="UTF-8">
		<meta name="description" content="loans HTML Template">
		<meta name="keywords" content="loans, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Favicon -->
		<link href="img/sp.png" rel="shortcut icon"/>
	
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
	 
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/owl.carousel.min.css"/>
		<link rel="stylesheet" href="css/flaticon.css"/>
		<link rel="stylesheet" href="css/slicknav.min.css"/>
	
		<!-- Main Stylesheets -->
		<link rel="stylesheet" href="css/style.css"/>
	
	
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	
	</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="/" class="site-logo">
			<img style="width:45px; margin-left:80px" src="img/sp.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="/">Home</a></li>
				<li><a href="/about">About Us</a></li>
				<li><a href="/invest">Plans</a></li>
				<li><a href="#">Resources</a>
					<ul class="sub-menu">
						<li><a href="#">Videos</a></li>
						<li><a href="/news">Articles</a></li>
						<li><a href="elements.html">More tips</a></li>
					</ul>
				</li>
				<li><a href="/contact" class="active">Contact</a></li>
			</ul>
			<div class="header-right">
				{{-- <a href="#" class="hr-btn"><i class="flaticon-029-signup-1"></i>Login/Signup </a> --}}
				  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                      <a href="{{ route('login') }}" class="hr-btn hr-btn-2">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hr-btn hr-btn-2">Signup</a>
                        @endif
                    @endauth
                </div>
            @endif
				{{-- <button class="btn btn-primary">Login/Signup</button> --}}
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Page top Section end -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Contact</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">Contact</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section end -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Get in touch</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hime-naeos. Suspendisse potenti. </p>
						<ul>
							<li><i class="flaticon-032-placeholder"></i>Head-office Lagos, Nigeria</li>
							<li><i class="flaticon-029-telephone-1"></i>+234 (603)535-4592</li>
							<li><i class="flaticon-025-arroba"></i>info@supernaire.com</li>
							<li><i class="flaticon-038-wall-clock"></i>Everyday: 08:00 - 22:00</li>
						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your E-mail">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Your Message"></textarea>
								<button class="site-btn">send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<!-- Contact Section end -->

	<!-- Score Section end -->
	<section class="score-section text-white set-bg" data-setbg="img/score-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-8">
					<h2>Start off with an investment Plan</h2>
					{{-- <h4>Check your credit reports as often as you want, it won't affect your scores.</h4> --}}
					<a href="/invest" class="site-btn sb-big">Get started</a>
				</div>
			</div>
			<img src="img/hand.png" alt="" class="hand-img">
		</div>
	</section>
	<!-- Score Section end -->
<!-- Footer Section -->
<footer class="footer-section">
	<div class="container">
		<a href="index.html" class="footer-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<div class="footer-widget">
					<h2>What we do</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas similique, aliquid repudiandae facere enim nulla! Commodi laboriosam odit assumenda quas?</p>
				</div>
			</div>


			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget">
					<h2>Links</h2>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Awards</a></li>
						<li><a href="#">Meet the board</a></li>
						<li><a href="#">Privacy policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget">
					<h2>We are Social</h2>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="imagine.com.ng" target="_blank">Imagine Tech Limited</a>
	</div>
</footer>
<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
