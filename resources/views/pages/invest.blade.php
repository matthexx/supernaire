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
				<li><a href="/invest" class="active">Plans</a></li>
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
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="container">
			<h2>Investments</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">Investment</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->


<!--Plans-->

<div class="container mt-5">
	<div class="text-center mb-5 pb-4">
		<h2>Start an investment Plan today!</h2>
	</div>

	<div class="row row-cols-1 row-cols-md-3">
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-1.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Cooperative System</h5>
			  <p class="card-text">The Cooperative Plan is a monthly income cashflow with stability and 100% monthly back guarantee.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/about-img.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Networking System</h5>
			  <p class="card-text">The networking plan earns you sixty thousand naira (N60) and helps you build a network that brings you a generational networth.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-2.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Mentorship Plan</h5>
			  <p class="card-text">The mentorship Plan empowers you with financial inteligence and certified to be a pioneer of our financial freedom campaign.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/about-img.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">Financial Plan</h5>
			  <p class="card-text">This Plan has the capacity to earn you 5 million in 5 months.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="row row-cols-1 row-cols-md-3">
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-1.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Investment Plan</h5>
			  <p class="card-text">This investment plan has the capacity to earn you ninety-six thousand naira (N96,000) daily and one million naira (1, 000 000) weekly for six months. Also increase your cash flow capacity to 7 sources of income.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-2.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Education Plan</h5>
			  <p class="card-text">This is a one year training programe to certify you as a professional and expert entrepreneur.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-1.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Business Plan</h5>
			  <p class="card-text">This Plan has the capacity to increase your cash flow to 12 sources of income. And also have chains of businesses with the help of our managers and consultants as they help you own your own corporations</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/about-img.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Retirement Plan</h5>
			  <p class="card-text">This is a lifetime world view with a perspective to tour the world make impact and fulfil divine purpose.</p>
			  <a href="/login" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>


<!--Plans End-->

	
	
<!-- Footer Section -->
<footer class="footer-section">
	<div class="container">
		<a href="index.html" class="footer-logo">
			<img style="width:60px" src="img/sp.png" alt="">
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
					<h2>We are Social!</h2>
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
