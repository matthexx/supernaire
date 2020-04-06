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
				<li><a href="/">Home</a></li>
				<li><a href="/about" class="active">About Us</a></li>
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
			<h2>About us</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">About us</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- About Section end -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="img/about-img.jpg" alt="">
				</div>
				<div class="col-lg-7">
					<div class="about-text">
						<h2>About Us</h2>
						<p>Supernaire.
							HELPING YOU ACHIEVE SUPER iNVESTMENT							
							We hope your visit will help you understand the opportunities and potential rewards that are available when you take a proactive approach to your personal financial situation. We have created this Web site to help you gain a better understanding of the financial concepts behind insurance, investing, retirement, estate planning, and wealth preservation. Most important, we hope you see the value of working with skilled professionals to pursue your financial goals.
							
							We're here to help educate you about the basic concepts of financial management; to help you learn more about who we are; and to give you fast, easy access to market performance data. We hope you take advantage of this resource and visit us often. Be sure to add our site to your list of "favorites" in your Internet browser. We frequently update our information, and we wouldn't want you to miss any developments in the area of personal finance.</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section end -->

	<div class="container">

	<div class="row">
		<div class="col-md-6">
			<div class="icon-box-item">
				<div class="ib-icon">
					<i class="flaticon-039-info"></i>
				</div>
				<div class="ib-text">
					<h5>Our Mission</h5>
					<p>Conubia nostra, per inceptos himenae os. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci.</p>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="icon-box-item">
				<div class="ib-icon">
					<i class="flaticon-039-info"></i>
				</div>
				<div class="ib-text">
					<h5>Our Vision</h5>
					<p>Conubia nostra, per inceptos himenae os. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci.</p>
				</div>
			</div>
		</div>
	</div>
</div>


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
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/about-img.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Networking System</h5>
			  <p class="card-text">The networking plan earns you sixty thousand naira (N60) and helps you build a network that brings you a generational networth.</p>
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-2.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Mentorship Plan</h5>
			  <p class="card-text">The mentorship Plan empowers you with financial inteligence and certified to be a pioneer of our financial freedom campaign.</p>
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/about-img.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">Financial Plan</h5>
			  <p class="card-text">This Plan has the capacity to earn you 5 million in 5 months.</p>
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
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
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-2.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Education Plan</h5>
			  <p class="card-text">This is a one year training programe to certify you as a professional and expert entrepreneur.</p>
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/feature-1.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Business Plan</h5>
			  <p class="card-text">This Plan has the capacity to increase your cash flow to 12 sources of income. And also have chains of businesses with the help of our managers and consultants as they help you own your own corporations</p>
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
		<div class="col mb-4">
		  <div class="card h-100">
			<img src="img/about-img.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">The Retirement Plan</h5>
			  <p class="card-text">This is a lifetime world view with a perspective to tour the world make impact and fulfil divine purpose.</p>
			  <a href="#" class="btn-success" style="font-weight:bold; padding:8px; border:1px; border-radius:18px;">Get started</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>


<!--Plans End-->

	<!-- Review Section end -->
	<section class="review-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-2">
				<h2>What Our Clients Say</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia.</p>
						<h6>Maria Smith, <span>25 min ago</span></h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>Sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia.</p>
						<h6>Marta Black, <span>25 min ago</span></h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse po-tenti. Ut gravida mattis magna, non varius lorem sodales nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
						<h6>Carl Brown, <span>25 min ago</span></h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>Per conubia nostra, per inceptos hime-naeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec.</p>
						<h6>Paul David, <span>25 min ago</span></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review Section end -->
	
	<!-- Authorities Section end -->
	<section class="authorities-section spad">
		<div class="container">
			<div class="text-center">
				<h2>Our Partners</h2>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="authoritie-item">
						<img src="img/brands/1.png" alt="">
						{{-- <h4>Financial Conduct Authority</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hime-naeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
						<a href="#" class="readmore">Apply for a loan now <img src="img/arrow.png" alt=""></a> --}}
					</div>
				</div>
				<div class="col-lg-4">
					<div class="authoritie-item">
						<img src="img/brands/2.png" alt="">
						{{-- <h4>Prudential Regulation Authority</h4>
						<p>Prudential Regulation Authority ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Pruden-tial Regulation Authority taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero.</p>
						<a href="#" class="readmore">Apply for a loan now <img src="img/arrow.png" alt=""></a> --}}
					</div>
				</div>
				<div class="col-lg-4">
					<div class="authoritie-item">
						<img src="img/brands/3.png" alt="">
						{{-- <h4>Peer-to-Peer Finance Association</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hime-naeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
						<a href="#" class="readmore">Apply for a loan now <img src="img/arrow.png" alt=""></a> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Authorities Section end -->

	
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
