<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

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
</head>
<body>

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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					 @csrf
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Name">
						<input  id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
						<input  id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						<span class="focus-input100"></span>
					</div>

					{{-- <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
						<input  id="phone" type="number" class="input100 form-control @error('number') is-invalid @enderror" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
						@error('number')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						<span class="focus-input100"></span>
					</div> --}}

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input id="password" class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password">
						@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						<span class="focus-input100"></span>
					</div>

					<div style="margin-top:20px" class="wrap-input100 validate-input m-b-16" data-validate="Please confirm password">
							<input id="password-confirm" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
					</div>

				

					<div class="container-login100-form-btn" style="margin-bottom:20px;">
						<button type="submit" class="login100-form-btn">
							{{ __('Register') }}
						</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>