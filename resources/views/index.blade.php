<!DOCTYPE html>
<html lang="en">
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
				<li><a href="/" class="active">Home</a></li>
				<li><a href="/about">About Us</a></li>
				<li><a href="/invest">Plans</a></li>
				<li><a href="#">Resources</a>
					<ul class="sub-menu">
						<li><a href="#">Videos</a></li>
						<li><a href="/news">Articles</a></li>
						<li><a href="elements.html">More tips</a></li>
					</ul>
				</li>
				<li><a href="/contact">Contact</a></li>
			</ul>
			<div class="header-right">
				{{-- <a href="#" class="hr-btn"><i class="flaticon-029-signup-1"></i>Login/Signup </a> --}}
				  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a style="color:white; margin-right:20px;" href="{{ url('/home') }}">Dashboard</a>
                    @else
                      <a href="{{ route('login') }}" class="hr-btn hr-btn-2">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hr-btn-3">Signup</a>
                        @endif
                    @endauth
                </div>
            @endif
				{{-- <button class="btn btn-primary">Login/Signup</button> --}}
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">
						<h4 style="color:#fff">Welcome to</h4>
						<h2>Supernaire Investment</h2>
						<p>Delivering Excellence finacial intelligence and empowerment to generate sustaiable cashflow for all.</p>
						<a href="#" class="site-btn sb-dark">Find out more</a>
					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form" id="register">
						<input type="text" placeholder="Your Name">
						<input type="text" placeholder="Your E-mail">
						<input type="text" placeholder="Your Phone">
						<select style="width: 100%;
										height: 49px;
										padding: 5px 26px;
										margin-bottom: 30px;
										border: none;
										font-size: 14px;
										color: #838383;
										font-style: italic;
										border-radius:0px;">
							<option value="" disabled selected>Select an Investment plan</option>
							<option value="American">Co-Operative System</option>
							<option value="Andean">Networking System</option>
							<option value="Chilean">Mentoring System</option>
							<option value="Greater">Financial Plan</option>
							<option value="James's">Investment Plan</option>
							<option value="Lesser">Educational Plan</option>
							<option value="Lesser">Business Plan</option>
							<option value="Lesser">Retiirement Plan</option>
						</select>	
						<input type="password" placeholder="Enter Password">

						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p> --}}
						<button class="site-btn">Apply for an Investment now!</button>
					</form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Why you should Invest?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-012-24-hours"></i>
						</div>
						<div class="ib-text">
							<h5>24hr Investment plan!</h5>
							<p>Get an investment that guarantees sustainable cashflow any time any where! </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-036-customer-service"></i>
						</div>
						<div class="ib-text">
							<h5>Great Customer support</h5>
							<p>We give 100% upport and help with starting up the right and perfect plan for you.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-039-info"></i>
						</div>
						<div class="ib-text">
							<h5>Long Lasting Credit History</h5>
							<p>We deliver through our long lasting credit history payouts and returns for all members.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-3">
				<a href="#register" class="site-btn sb-big">Apply Now!</a>
			</div>
		</div>
	</section>
	<!-- Why Section end -->


	<!-- CTA Section end -->
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container">
			<h2>Already a <strong>Pioneer?</strong> </h2>
			<h5>Refer a friend today and earn even much more.</h5>
			<a href="#" class="site-btn sb-dark sb-big">Find out how</a>
		</div>
	</section>
	<!-- CTA Section end -->

	<div class="container" style="margin-bottom:-50px">
		<h2 class="text-center mt-5 pb-4">Our Investment Plans!</h2>
	</div>


	<!-- Feature Section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="feature-item">
				<div class="row">
					<div class="col-lg-6">
						<img style="border:0; border-radius:30px" src="img/feature-1.jpg" alt="">
					</div>
					<div class="col-lg-6">
						<div class="feature-text">
							<h2>The Cooperative System</h2>
							<p>The Cooperative Plan is a monthly income cashflow with stability and 100% monthly back guarantee.</p>
							<a href="/register" class="readmore">Invest now <img src="img/arrow.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item">
				<div class="row">
					<div class="col-lg-6 order-lg-2">
						<img style="border:0; border-radius:30px" src="img/feature-2.jpg" alt="">
					</div>
					<div class="col-lg-6 order-lg-1">
						<div class="feature-text">
							<h2>The Networking System</h2>
							<p>The networking plan earns you sixty thousand naira (N60) and helps you build a network that brings you a generational networth.</p>
							<a href="/register" class="readmore">Invest now <img src="img/arrow.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="feature-section spad">
		<div class="container">
			<div class="feature-item">
				<div class="row">
					<div class="col-lg-6">
						<img style="border:0; border-radius:30px" src="img/feature-1.jpg" alt="">
					</div>
					<div class="col-lg-6">
						<div class="feature-text">
							<h2>Mentoring System</h2>
							<p>The mentorship Plan empowers you with financial inteligence and certified to be a pioneer of our financial freedom campaign.</p>
							<a href="register" class="readmore">Invest now <img src="img/arrow.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item">
				<div class="row">
					<div class="col-lg-6 order-lg-2">
						<img style="border:0; border-radius:30px" src="img/feature-2.jpg" alt="">
					</div>
					<div class="col-lg-6 order-lg-1">
						<div class="feature-text">
							<h2>Financial Plan</h2>
							<p>This Plan has the capacity to earn you 5 million in 5 months.</p>
							<a href="/register" class="readmore">Invest now <img src="img/arrow.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Section end -->

	<!--Call to action -->
	<section class="info-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="info-text text-center">
						<h2>Get the best of our Investment plans today!</h2>
						<div class="text-center pt-3">
							<a href="/invest" class="site-btn sb-big">See more Plans!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Call to action -->



	<!-- Help Section -->
	{{-- <section class="help-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-4">
				<h2>How Supernaire can help</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec.</p>
				</div>
				<div class="col-md-6">
					<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="help-list">
						<li>Buying a car</li>
						<li>Take control of your finances</li>
						<li>Pay school tuitions</li>
						<li>Adding value to your home</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Increese your budget</li>
						<li>Have a day to remember</li>
						<li>Get a new card</li>
						<li>Go on a holliday</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Get an Insurance</li>
						<li>Take a trip</li>
						<li>Help your kids</li>
						<li>Renovate your home</li>
					</ul>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Help Section end -->


	<!-- Info Section -->
	{{-- <section class="info-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="img/info-img.jpg" alt="">
				</div>
				<div class="col-lg-7">
					<div class="info-text">
						<h2>We’re here to help</h2>
						<h5>All week long(24/7).</h5> --}}
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p> --}}
						{{-- <ul>
							<li>+234 706 309 3944</li>
							<li>info@Supernaire.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Info Section end -->

	<!-- Score Section end -->
	{{-- <section class="score-section text-white set-bg" data-setbg="img/score-bg.jpg"> --}}
		{{-- <div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-8">
					<h2>Calculate my Score</h2>
					<h4>Check your credit reports as often as you want, it won't affect your scores.</h4>
					<a href="#" class="site-btn sb-big">show my score</a>
				</div>
			</div>
			<img src="img/hand.png" alt="" class="hand-img">
		</div>
	</section> --}}
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
						<li><a href="#">Referral System</a></li>
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
{{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="imagine.com.ng" target="_blank">Imagine Tech Limited</a> --}}
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
