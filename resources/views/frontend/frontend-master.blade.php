<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hutt World</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<link href="{{ asset('css/css_slider.css') }}" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="/"><img src="logo.png" alt=""></a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="{{ url('/') }}">Home</a></li>
				<li class=""><a href="{{ url('/about') }}">About Us</a></li>
				<li class=""><a href="{{ url('/services') }}">Services</a></li>
				<li class=""><a href="{{ url('/package') }}">Packages</a></li>
				<li class=""><a href="{{ url('/contact') }}">Contact</a></li>
				<li class="booking"><a href="{{ url('booking/') }}">Book Now</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

@yield('content')

<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Address</h3>
				</div>
				<div class="footer-text">
					<p>Location : k-9/1,Bashundhora Road,Jamuna Future Park</p>
					<p>Dhaka,Bangladesh</p>
					<p>Phone : +8801683933310 <i class="fa fa-whatsapp" aria-hidden="true"></i></p>
					<p>Phone : +8801722018773 </p>
					<p>Phone : +8801924173752 </p>
					<p>Email : <a href="mailto:support@huttworld.com">support@huttworld.com</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience..</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Travel Places</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">New Zealand </a></li>
						<li><a href="#overview" class="scroll">Paris, France </a></li>
						<li><a href="#pricing" class="scroll">Los Angles</a></li>
						<li><a href="#faq" class="scroll"> Darlington</a></li>
						<li><a href="#testimonials" class="scroll">Canada </a></li>
						<li><a href="#contact" class="scroll"> South Africa </a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Spain </a></li>
						<li><a href="#">Turkey </a></li>
						<li><a href="#faq" class="scroll">Europe </a></li>
						<li><a href="#">Italy </a></li>
						<li><a href="#">Sweden </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2019 Grand Tour. All Rights Reserved | Made by <a href="https://www.shahriar.eduera.com.bd/" target="=_blank"> Al Shahriar Mehedi </a></p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

	
</body>
</html>