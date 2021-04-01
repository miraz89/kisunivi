@extends('frontend.layouts.master')




{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <!-- Required meta tags -->--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--        <!-- Bootstrap Min CSS -->--}}
{{--        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">--}}
{{--        <!-- Animate Min CSS -->--}}
{{--        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">--}}
{{--        <!-- Magnific Popup Min CSS -->--}}
{{--		<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">--}}
{{--		<!-- Owl Carousel Min CSS -->--}}
{{--		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">--}}
{{--        <!-- Mean Menu CSS -->--}}
{{--		<link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">--}}
{{--		<!-- IcoFont Min CSS -->--}}
{{--		<link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.min.css') }}">--}}
{{--		<!-- Odometer CSS -->--}}
{{--        <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.css') }}">--}}
{{--        <!-- Nice Select CSS -->--}}
{{--        <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">--}}
{{--        <!-- Style CSS -->--}}
{{--        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">--}}
{{--        <!-- Resposive CSS -->--}}
{{--        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">--}}

{{--        <title>@yield('title') - {{ config('app.name', 'Foundation') }}</title>--}}

{{--		<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">--}}
{{--    </head>--}}

{{--    <body>--}}
{{--		<!-- Start Preloader -->--}}
{{--		<div class="preloader">--}}
{{--			<div class="loader">--}}
{{--				<h1 class="glitched">নিজের বলার মতো একটা গল্প</h1>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		<!-- End Preloader -->--}}

{{--        <!-- Start Navbar Area -->--}}
{{--		<header id="header">--}}
{{--			<div class="artflex-mobile-nav">--}}
{{--				<div class="logo">--}}
{{--					<a href="index-6.html"><img src="{{ asset('frontend/assets/img/logoye.png') }}" alt="logo"></a>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="artflex-nav">--}}
{{--				<div class="container">--}}
{{--					<nav class="navbar navbar-expand-md navbar-light">--}}
{{--						<a class="navbar-brand" href="index-6.html"><img src="{{ asset('frontend/assets/img/logoye.png') }}" alt="logo"></a>--}}

{{--						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">--}}
{{--							<ul class="navbar-nav ml-auto">--}}
{{--								<li class="nav-item"><a href="index-6.html" class="nav-link active">Home <i class=""></i></a>--}}
{{--								<!--	<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="index.html" class="nav-link">Digital Agency</a></li>--}}

{{--										<li class="nav-item"><a href="index-2.html" class="nav-link">Freelancer Portfolio </a></li>--}}

{{--										<li class="nav-item"><a href="index-3.html" class="nav-link">Startup Agency</a></li>--}}

{{--										<li class="nav-item"><a href="index-4.html" class="nav-link">Agency Portfolio</a></li>--}}

{{--										<li class="nav-item"><a href="index-5.html" class="nav-link">Creative Blog</a></li>--}}

{{--										<li class="nav-item"><a href="index-6.html" class="nav-link active">Digital Agency Animation</a></li>--}}

{{--										<li class="nav-item"><a href="index-7.html" class="nav-link">Freelancer Portfolio Animation</a></li>--}}

{{--										<li class="nav-item"><a href="index-8.html" class="nav-link">Startup Agency Animation</a></li>--}}
{{--									</ul> -->--}}
{{--								</li>--}}


{{--								<li class="nav-item"><a href="faq.html" class="nav-link">About <i class="icofont-simple-down"></i></a>--}}
{{--									<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="about-us.html" class="nav-link">About English</a></li>--}}

{{--										<li class="nav-item"><a href="about-us -Bangla.html" class="nav-link">About Bangla</a></li>--}}


{{--									</ul>--}}
{{--								</li>--}}

{{--								<li class="nav-item"><a href="faq.html" class="nav-link">Session <i class="icofont-simple-down"></i></a>--}}
{{--									<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="faq.html" class="nav-link">Text Session</a></li>--}}

{{--										<li class="nav-item"><a href="video.html" class="nav-link">Video Session</a></li>--}}


{{--									</ul>--}}
{{--								</li>--}}

{{--							<li class="nav-item"><a href="about-us.html" class="nav-link">Others <i class="icofont-simple-down"></i></a>--}}
{{--									<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="#" class="nav-link">Gallery</a>--}}
{{--											<ul class="dropdown_menu">--}}
{{--												<li class="nav-item"><a href="portfolio-1.html" class="nav-link">Photo Gallery</a></li>--}}

{{--												<li class="nav-item"><a href="video.html" class="nav-link">Video Gallery</a></li>--}}
{{--											</ul>--}}
{{--										</li>--}}

{{--									<!--	<li class="nav-item"><a href="#" class="nav-link">Team</a>--}}
{{--											<ul class="dropdown_menu">--}}
{{--												<li class="nav-item"><a href="team-1.html" class="nav-link">Team 1</a></li>--}}

{{--												<li class="nav-item"><a href="team-2.html" class="nav-link">Team 2</a></li>--}}

{{--												<li class="nav-item"><a href="single-team.html" class="nav-link">Team Details</a></li>--}}
{{--											</ul>--}}
{{--										</li>--}}

{{--										<li class="nav-item"><a href="#" class="nav-link">Services</a>--}}
{{--											<ul class="dropdown_menu">--}}
{{--												<li class="nav-item"><a href="services-1.html" class="nav-link">Services 1</a></li>--}}

{{--												<li class="nav-item"><a href="services-2.html" class="nav-link">Services 2</a></li>--}}

{{--												<li class="nav-item"><a href="services-3.html" class="nav-link">Services 3</a></li>--}}
{{--											</ul>--}}
{{--										</li> -->--}}

{{--										<li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>--}}

{{--										<li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>--}}

{{--									<!--	<li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a></li>--}}

{{--										<li class="nav-item"><a href="error.html" class="nav-link">404 Error</a></li> -->--}}

{{--										<li class="nav-item"><a href="event.html" class="nav-link">Event</a></li>--}}
{{--										<li class="nav-item"><a href="blog-5.html" class="nav-link">Blog</a></li>--}}
{{--										<li class="nav-item"><a href="news.html" class="nav-link">News</a></li>--}}
{{--										<li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>--}}

{{--										<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>--}}
{{--									</ul>--}}
{{--							</li>--}}


{{--							<!--	<li class="nav-item"><a href="blog-5.html" class="nav-link">Blog <i class=""></i></a>--}}
{{--									<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="portfolio-1.html" class="nav-link">Portfolio Grid</a></li>--}}

{{--										<li class="nav-item"><a href="portfolio-2.html" class="nav-link">Portfolio Full Width</a></li>--}}

{{--										<li class="nav-item"><a href="portfolio-3.html" class="nav-link">Portfolio Full Width 2</a></li>--}}

{{--										<li class="nav-item"><a href="portfolio-4.html" class="nav-link">Portfolio Masonary</a></li>--}}

{{--										<li class="nav-item"><a href="single-portfolio.html" class="nav-link">Portfolio Details</a></li>--}}
{{--									</ul>--}}
{{--								</li>--}}

{{--								<li class="nav-item"><a href="news.html" class="nav-link">News <i class=""></i></a>--}}
{{--									<!--<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="shop-1.html" class="nav-link">Shop Grid</a></li>--}}

{{--										<li class="nav-item"><a href="shop-2.html" class="nav-link">Shop Right Sidebar</a></li>--}}

{{--										<li class="nav-item"><a href="single-product.html" class="nav-link">Shop Details</a></li>--}}

{{--										<li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>--}}

{{--										<li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>--}}
{{--									</ul>--}}
{{--								</li>--}}

{{--								<li class="nav-item"><a href="#" class="nav-link">Gallery <i class="icofont-simple-down"></i></a>--}}
{{--									<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="portfolio-1.html" class="nav-link">Photo Gallery</a></li>--}}

{{--										<li class="nav-item"><a href="video.html" class="nav-link">Video Gallery</a></li>--}}

{{--									<!--	<li class="nav-item"><a href="single-product.html" class="nav-link">Shop Details</a></li>--}}

{{--										<li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>--}}

{{--										<li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>--}}
{{--									</ul>--}}
{{--								</li>--}}

{{--								<li class="nav-item"><a href="event.html" class="nav-link">Event <i class=""></i></a>--}}













{{--									<!-- <ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="portfolio-1.html" class="nav-link">Photo Gallery</a></li>--}}

{{--										<li class="nav-item"><a href="video.html" class="nav-link">Video Gallery</a></li>--}}

{{--										<li class="nav-item"><a href="single-product.html" class="nav-link">Shop Details</a></li>--}}

{{--										<li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>--}}

{{--										<li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>--}}
{{--									</ul>--}}
{{--								</li> -->--}}



{{--							<!--	<li class="nav-item"><a href="#" class="nav-link">Reg <i class="icofont-simple-down"></i></a>--}}
{{--									<ul class="dropdown_menu">--}}
{{--										<li class="nav-item"><a href="portfolio-1.html" class="nav-link">Sign Up</a></li>--}}

{{--										<li class="nav-item"><a href="video.html" class="nav-link">Sign In</a></li>--}}

{{--									<!--	<li class="nav-item"><a href="single-product.html" class="nav-link">Shop Details</a></li>--}}

{{--										<li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>--}}

{{--										<li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>--}}
{{--									</ul>--}}
{{--								</li> -->--}}





{{--							<!--	<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->--}}
{{--							</ul>--}}

{{--							<div class="others-option">--}}
{{--								<ul>--}}
{{--									<li>--}}
{{--										<span class="search-popup-icon"><i class="icofont-ui-search"></i></span>--}}
{{--									</li>--}}

{{--									<li>--}}
{{--										<a href="cart.html" class="cart-icon">--}}
{{--											<i class="icofont-bag"></i>--}}
{{--											<span>0</span>--}}
{{--										</a>--}}
{{--									</li>--}}

{{--									<li data-toggle="modal" data-target="#myModal2">--}}
{{--										<div class="side-menu">--}}
{{--											<span class="bar-1"></span>--}}
{{--											<span class="bar-2"></span>--}}
{{--											<span class="bar-3"></span>--}}
{{--										</div>--}}
{{--									</li>--}}
{{--								</ul>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</nav>--}}
{{--				</div>--}}
{{--				<div class="searchBoxTop">--}}
{{--					<div class="seachBoxContainer">--}}
{{--						<div class="container">--}}
{{--							<span class="searchClose"></span>--}}

{{--							<form>--}}
{{--								<input class="form-control" type="text" placeholder="Search here..">--}}

{{--								<button type="submit"><i class="icofont-search-2"></i></button>--}}
{{--							</form>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</header>--}}
{{--		<!-- End Navbar Area -->--}}

{{--		<!-- Start Sidebar Modal -->--}}
{{--		<div class="sidebar-modal">--}}
{{--			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">--}}
{{--				<div class="modal-dialog" role="document">--}}
{{--					<div class="modal-content">--}}
{{--						<div class="modal-header">--}}
{{--							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>--}}

{{--							<h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="{{ asset('frontend/assets/img/logoye.png') }}" alt="logo"></a></h2>--}}
{{--						</div>--}}

{{--						<div class="modal-body">--}}
{{--							<div class="sidebar-modal-widget">--}}
{{--								<h3 class="title">Additional Links</h3>--}}

{{--								<ul>--}}
{{--									<li><a href="#">Login</a></li>--}}
{{--									<li><a href="#">Register</a></li>--}}
{{--									<li><a href="#">FAQ</a></li>--}}
{{--									<li><a href="#">Logout</a></li>--}}
{{--								</ul>--}}
{{--							</div>--}}

{{--							<div class="sidebar-modal-widget">--}}
{{--								<h3 class="title">Contact Info</h3>--}}

{{--								<ul class="contact-info">--}}
{{--									<li>--}}
{{--										<i class="icofont-google-map"></i>--}}
{{--										Address--}}
{{--										<span>1660 Travis Street Miramar, FL 33025, California</span>--}}
{{--									</li>--}}
{{--									<li>--}}
{{--										<i class="icofont-email"></i>--}}
{{--										Email--}}
{{--										<span><a href="#">admin@artflex.com</a></span>--}}
{{--									</li>--}}
{{--									<li>--}}
{{--										<i class="icofont-phone"></i>--}}
{{--										Phone--}}
{{--										<span><a href="#">+123 456 7890</a></span>--}}
{{--									</li>--}}
{{--								</ul>--}}
{{--							</div>--}}

{{--							<div class="sidebar-modal-widget">--}}
{{--								<h3 class="title">Connect With Us</h3>--}}

{{--								<ul class="social-list">--}}
{{--									<li><a href="#"><i class="icofont-facebook"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-twitter"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-instagram"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-linkedin"></i></a></li>--}}
{{--								</ul>--}}
{{--							</div>--}}

{{--							<div class="sidebar-modal-widget">--}}
{{--								<h3 class="title">Search</h3>--}}

{{--								<form class="modal-search-form">--}}
{{--									<input type="text" class="form-control" placeholder="Serch here..">--}}
{{--									<button type="submit"><i class="icofont-search-2"></i></button>--}}
{{--								</form>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div><!-- modal-content -->--}}
{{--				</div><!-- modal-dialog -->--}}
{{--			</div><!-- modal -->--}}
{{--		</div>--}}
{{--		<!-- End Sidebar Modal -->--}}

{{--		<!-- Start Digital Agency Banner -->--}}
{{--		<div class="main-banner digital-agency-banner">--}}
{{--			<div id="scroll-down">--}}
{{--				<span class="arrow-down"></span>--}}
{{--				<span id="scroll-title">--}}
{{--					Scroll down--}}
{{--				</span>--}}
{{--			</div>--}}

{{--			<div class="d-table">--}}
{{--				<div class="d-table-cell">--}}
{{--					<div class="container">--}}
{{--						<div class="row h-100 align-items-center">--}}
{{--							<div class="col-lg-6 col-md-12">--}}
{{--								<div class="hero-content">--}}
{{--									<h1 class="wow fadeInUp">Nijer Bolar Moto Ekta Golpo</h1>--}}
{{--									<p class="wow fadeInDown">Nijer Bolar Moto Ekta Golpo works on 3 issues:</p>--}}
{{--									<p class="wow fadeInDown">1. 90 Days Online Training on Entrepreneurship “How to be an Entrepreneur”--}}
{{--2. Values, Leadership, 10 different Skills & “to be a Good Human being” <br />--}}
{{--3. Volunteering & Social Work</p>--}}
{{--									<a href="#" class="btn btn-primary wow fadeInLeft">Get Started</a>--}}
{{--								</div>--}}
{{--							</div>--}}

{{--							<div class="col-lg-6 col-md-12">--}}
{{--								<div class="banner-image">--}}
{{--								<br /><br /><br /><br />--}}
{{--									<img src="{{ asset('frontend/assets/img/IqbalBaharZahid.jpg') }}" alt="women">--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="banner-social-buttons">--}}
{{--				<ul>--}}
{{--					<li>--}}
{{--						<a href="#">--}}
{{--							<i class="icofont-facebook"></i>--}}

{{--							<span>Facebook</span>--}}
{{--						</a>--}}
{{--					</li>--}}

{{--					<li>--}}
{{--						<a href="#">--}}
{{--							<i class="icofont-twitter"></i>--}}

{{--							<span>Twitter</span>--}}
{{--						</a>--}}
{{--					</li>--}}

{{--					<li>--}}
{{--						<a href="#">--}}
{{--							<i class="icofont-instagram"></i>--}}

{{--							<span>Instagram</span>--}}
{{--						</a>--}}
{{--					</li>--}}
{{--				</ul>--}}
{{--			</div>--}}

{{--			<div class="shape1"><img src="{{ asset('frontend/assets/img/shapes/1.png') }}" alt="shape"></div>--}}
{{--			<div class="shape2"><img src="{{ asset('frontend/assets/img/shapes/2.png') }}" alt="shape"></div>--}}
{{--			<div class="shape3"><img src="{{ asset('frontend/assets/img/shapes/3.png') }}" alt="shape"></div>--}}
{{--			<div class="shape4"><img src="{{ asset('frontend/assets/img/shapes/4.png') }}" alt="shape"></div>--}}
{{--			<div class="shape5"><img src="{{ asset('frontend/assets/img/shapes/5.png') }}" alt="shape"></div>--}}
{{--			<div class="shape6"><img src="{{ asset('frontend/assets/img/shapes/6.png') }}" alt="shape"></div>--}}
{{--			<div class="shape7"><img src="{{ asset('frontend/assets/img/shapes/7.png') }}" alt="shape"></div>--}}
{{--			<div class="shape8"><img src="{{ asset('frontend/assets/img/shapes/8.png') }}" alt="shape"></div>--}}
{{--			<div class="shape9 rotateme"><img src="{{ asset('frontend/assets/img/shapes/9.png') }}" alt="shape"></div>--}}
{{--			<div class="shape10 rotateme"><img src="{{ asset('frontend/assets/img/shapes/10.png') }}" alt="shape"></div>--}}
{{--			<div class="circle-shape1"><img src="{{ asset('frontend/assets/img/shapes/circle1.png') }}" alt="shape"></div>--}}
{{--			<div class="circle-shape2"><img src="{{ asset('frontend/assets/img/shapes/circle2.png') }}" alt="shape"></div>--}}
{{--			<div class="circle-shape3"><img src="{{ asset('frontend/assets/img/shapes/circle3.png') }}" alt="shape"></div>--}}
{{--		</div>--}}
{{--		<!-- End Digital Agency Banner -->--}}

{{--		<!-- Start CTA About Area -->--}}
{{--		<section class="cta-about">--}}
{{--			<div class="container-fluid p-0">--}}
{{--				<div class="row">--}}
{{--					<div class="col-lg-6 col-md-6">--}}
{{--						<div class="cta-about-image" style="background-image: url({{ asset('frontend/assets/img/conference.jpg') }})">--}}
{{--							<img src="{{ asset('frontend/assets/img/conference.jpg') }}" alt="cta-image">--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-6 col-md-6">--}}
{{--						<div class="cta-about-content ptb-120">--}}
{{--							<div class="section-title">--}}
{{--								<span class="wow fadeInUp">About Us</span>--}}
{{--								<h2 class="wow fadeInDown">We are Creative <br> Organization.</h2>--}}
{{--							</div>--}}
{{--							<p>I am an Entrepreneur, I have 5 Companies named OptiMax Communication Ltd (Nation-wide ISP & IIG), Aalaadin.Com (eCommerce) & Utv Entertainment.Com (Live Streaming Company), Sherabangla64 (eCommerce) & SkillUp Bangladesh (ICT Training) in the ICT sector working for the last 17 years where 200 nos Computer Engineers & from other discipline Youth are working here. I was a Teacher of a renowned Private University, a Mentor & Inspirational Speaker on Entrepreneurship & on Values of Life. I also do News Presentation & Anchoring of Business Programs at TVs & Radios</p>--}}

{{--							<p>There are 40 Million unemployed Populations in Bangladesh. So we need a lot of Young Entrepreneurs in our Country to reduce the huge unemployment crisis.</p>--}}

{{--							<a href="#" class="btn btn-primary wow fadeInUp">Let's Talk</a>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section>--}}
{{--		<!-- End CTA About Area -->--}}

{{--		<!-- Start Services Area -->--}}
{{--		<section class="welcome-services ptb-120 bg-38d16a">--}}
{{--			<div class="container">--}}
{{--				<div class="section-title">--}}
{{--					<span class="wow fadeInUp">Our Work for People</span>--}}
{{--					<h2 class="wow fadeInDown">Welcome to our Organization</h2>--}}
{{--				</div>--}}

{{--				<div class="row">--}}
{{--					<div class="col-lg-4 col-md-6">--}}
{{--						<div class="single-services">--}}
{{--							<div class="icon">--}}
{{--								<i class="icofont-dart"></i>--}}
{{--							</div>--}}
{{--							<h3>Entrepreneurship Training</h3>--}}
{{--							<p>"90 Days Online Training on Entrepreneurship “How to be an Entrepreneur”.</p>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-4 col-md-6">--}}
{{--						<div class="single-services">--}}
{{--							<div class="icon">--}}
{{--								<i class="icofont-handshake-deal"></i>--}}
{{--							</div>--}}
{{--							<h3>10 different Skills</h3>--}}
{{--							<p>Values, Leadership, 10 different Skills & “to be a Good Human being”. These are also free</p>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">--}}
{{--						<div class="single-services">--}}
{{--							<div class="icon">--}}
{{--								<i class="icofont-pie-chart"></i>--}}
{{--							</div>--}}
{{--							<h3>Social Work</h3>--}}
{{--							<p>Volunteering & Social Work. Volunteering & Social work is one of the most important issue for our organization</p>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-12 col-md-12">--}}
{{--						<div class="more-services-btn wow fadeInUp">--}}
{{--							<a href="services-2.html" class="btn btn-primary">More Work</a>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--			<div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--		</section>--}}
{{--		<!-- End Services Area -->--}}

{{--		<!-- Start Why Choose Us Area -->--}}
{{--		<section class="why-choose-us-area ptb-120">--}}
{{--			<div class="container">--}}
{{--				<div class="row h-100 align-items-center">--}}
{{--					<div class="col-lg-6 col-md-12">--}}
{{--						<div class="why-choose-us-img">--}}
{{--							<img src="{{ asset('frontend') }}/assets/img/team.jpg" class="front-img" alt="img">--}}
{{--							<img src="{{ asset('frontend') }}/assets/img/2.jpg" class="back-img" alt="img">--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-6 col-md-12">--}}
{{--						<div class="why-choose-us-content">--}}
{{--							<div class="section-title">--}}
{{--								<span class="wow fadeInUp">WHy Choose Us</span>--}}
{{--								<h2 class="wow fadeInDown">We are creative, Organization.</h2>--}}
{{--							</div>--}}
{{--							<p>Nijer Bolar Moto Ekta Golpo works on 3 issues:</p>--}}

{{--							<p>1. 90 Days Online Training on Entrepreneurship “How to be an Entrepreneur”</p>--}}

{{--							<p>2. Values, Leadership, 10 different Skills & “to be a Good Human being”</p>--}}
{{--							<p>3. Volunteering & Social Work</p>--}}
{{--							<a href="#" class="btn btn-primary wow fadeInUp">About Us</a>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="why-choose-inner-area">--}}
{{--					<div class="row">--}}
{{--						<div class="col-lg-12 col-md-12">--}}
{{--							<div class="section-title">--}}
{{--								<h2 class="wow fadeInDown">We like to find simple solutions to complex problems</h2>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-4 col-md-6">--}}
{{--							<div class="single-box">--}}
{{--								<div class="icon">--}}
{{--									<i class="icofont-handshake-deal"></i>--}}
{{--								</div>--}}
{{--								<h3><a href="https://www.facebook.com/groups/youngentrepreneursbdiqbal" target="_blank">Join Our Community</a></h3>--}}
{{--								<p>You may learn more than you aspact.</p>--}}

{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-4 col-md-6">--}}
{{--							<div class="single-box">--}}
{{--								<div class="icon">--}}
{{--									<i class="icofont-brand-appstore"></i>--}}
{{--								</div>--}}
{{--								<h3><a href="https://www.facebook.com/Iqbalbahar28" target="_blank">Follow Our Page</a></h3>--}}
{{--								<p>Follow Our Page for any news or event.</p>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">--}}
{{--							<div class="single-box">--}}
{{--								<div class="icon">--}}
{{--									<i class="icofont-bullhorn"></i>--}}
{{--								</div>--}}
{{--								<h3><a href="https://www.youtube.com/c/IqbalBahar/playlists" target="_blank">Learn live</a></h3>--}}
{{--								<p>You may learn more on youtube</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--			<div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--			<div class="circle-dot"><img src="{{ asset('frontend') }}/assets/img/shapes/dot-shape1.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End Why Choose Us Area -->--}}

{{--		<!-- Start Crafting Area -->--}}
{{--		 <section class="crafting-area ptb-120 bg-f8f9fe">--}}
{{--			<div class="container">--}}
{{--				<div class="section-title">--}}
{{--					<span class="wow fadeInUp">About Us</span>--}}
{{--					<h2 class="wow fadeInDown">We are creatives with 25 years of experience</h2>--}}
{{--				</div>--}}

{{--				<div class="row h-100 align-items-center">--}}
{{--					<div class="col-lg-6 col-md-12">--}}
{{--						<div class="crafting-content">--}}
{{--							<div class="single-item item-one">--}}
{{--								<i class="icofont-wink-smile"></i>--}}
{{--								<h6>Community</h6>--}}
{{--							</div>--}}

{{--							<div class="single-item item-two">--}}
{{--								<i class="icofont-ebook"></i>--}}
{{--								<h6>Honest pricing</h6>--}}
{{--							</div>--}}

{{--							<div class="single-item item-three">--}}
{{--								<i class="icofont-wink-smile"></i>--}}
{{--								<h6>Management</h6>--}}
{{--							</div>--}}

{{--							<div class="single-item item-four">--}}
{{--								<i class="icofont-stock-mobile"></i>--}}
{{--								<h6>Mobile Design</h6>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-6 col-md-12">--}}
{{--						<div class="crafting-image">--}}
{{--							<img src="{{ asset('frontend') }}/assets/img/cta-about.jpg" alt="image">--}}

{{--							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-btn popup-youtube"><i class="icofont-play-alt-3"></i></a>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>--}}
{{--			<div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>--}}
{{--			<div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End Crafting Area -->--}}

{{--		<!-- Start Work Area -->--}}
{{--		<section class="works-area ptb-120 pb-0 bg-08071c">--}}
{{--			<div class="container">--}}
{{--				<div class="section-title">--}}
{{--					<span class="wow fadeInUp">Our Work</span>--}}
{{--					<h2 class="wow fadeInDown">We have completed 2K project successfully</h2>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="row m-0">--}}
{{--				<div class="col-lg-4 col-md-12 col-sm-12 p-0">--}}
{{--					<div class="single-work m-0">--}}
{{--						<img src="{{ asset('frontend') }}/assets/img/work-image/sw1.jpg" alt="image">--}}

{{--						<div class="works-content">--}}
{{--							<h3><a href="#">Volunteering & Social Work</a></h3>--}}
{{--							<p>We are also working on any kind of social work. we have a quick respons team for these.</p>--}}
{{--						</div>--}}

{{--						<a href="#" class="link-btn"><i class="icofont-external-link"></i></a>--}}

{{--						<a href="{{ asset('frontend') }}/assets/img/work-image/1.jpg" class="popup-btn"><i class="icofont-expand"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="col-lg-4 col-md-6 col-sm-6 p-0">--}}
{{--					<div class="single-work m-0">--}}
{{--						<img src="{{ asset('frontend') }}/assets/img/work-image/sw2.jpeg" alt="image">--}}

{{--						<div class="works-content">--}}
{{--							<h3><a href="#">Food to Poor</a></h3>--}}
{{--							<p>Our team working to poor for giving food.</p>--}}
{{--						</div>--}}

{{--						<a href="#" class="link-btn"><i class="icofont-external-link"></i></a>--}}

{{--						<a href="{{ asset('frontend') }}/assets/img/work-image/2.jpg" class="popup-btn"><i class="icofont-expand"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="col-lg-4 col-md-6 col-sm-6 p-0">--}}
{{--					<div class="single-work m-0">--}}
{{--						<img src="{{ asset('frontend') }}/assets/img/work-image/sw3.jpg" alt="image">--}}

{{--						<div class="works-content">--}}
{{--							<h3><a href="#">Iftar with Poor</a></h3>--}}
{{--							<p>Our team working to poor for perticipate with Rojadar.</p>--}}
{{--						</div>--}}

{{--						<a href="#" class="link-btn"><i class="icofont-external-link"></i></a>--}}

{{--						<a href="{{ asset('frontend') }}/assets/img/work-image/3.jpg" class="popup-btn"><i class="icofont-expand"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="col-lg-4 col-md-6 col-sm-6 p-0">--}}
{{--					<div class="single-work m-0">--}}
{{--						<img src="{{ asset('frontend') }}/assets/img/work-image/sw4.jpeg" alt="image">--}}

{{--						<div class="works-content">--}}
{{--							<h3><a href="#">Relief goods</a></h3>--}}
{{--							<p>Our team working to poor for serve Relief goods.</p>--}}
{{--						</div>--}}

{{--						<a href="#" class="link-btn"><i class="icofont-external-link"></i></a>--}}

{{--						<a href="{{ asset('frontend') }}/assets/img/work-image/4.jpg" class="popup-btn"><i class="icofont-expand"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="col-lg-4 col-md-6 col-sm-6 p-0">--}}
{{--					<div class="single-work m-0">--}}
{{--						<img src="{{ asset('frontend') }}/assets/img/work-image/blood.jpg" alt="image">--}}

{{--						<div class="works-content">--}}
{{--							<h3><a href="#">Blood Donation</a></h3>--}}
{{--							<p>Our team working for contribute blood for free.</p>--}}
{{--						</div>--}}

{{--						<a href="#" class="link-btn"><i class="icofont-external-link"></i></a>--}}

{{--						<a href="{{ asset('frontend') }}/assets/img/work-image/5.jpg" class="popup-btn"><i class="icofont-expand"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="col-lg-4 col-md-12 col-sm-12 p-0">--}}
{{--					<div class="single-work m-0">--}}
{{--						<img src="{{ asset('frontend') }}/assets/img/work-image/treeplantation.jpeg" alt="image">--}}

{{--						<div class="works-content">--}}
{{--							<h3><a href="#">Tree Plantation </a></h3>--}}
{{--							<p>Our team working on Tree Plantation .</p>--}}
{{--						</div>--}}

{{--						<a href="#" class="link-btn"><i class="icofont-external-link"></i></a>--}}

{{--						<a href="{{ asset('frontend') }}/assets/img/work-image/6.jpg" class="popup-btn"><i class="icofont-expand"></i></a>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="shape11"><img src="{{ asset('frontend') }}/assets/img/shapes/11.png" alt="shape"></div>--}}
{{--			<div class="shape12"><img src="{{ asset('frontend') }}/assets/img/shapes/12.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End Work Area -->--}}

{{--		<!-- Start Feedback Area -->--}}
{{--		<section class="feedback-area ptb-120 bg-38d16a">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="feedback-slides owl-carousel owl-theme">--}}
{{--						<div class="col-lg-12">--}}
{{--							<div class="single-feedback">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/client-image/sw1.jpg" alt="image">--}}

{{--								<p>"Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh."</p>--}}

{{--								<h3>Sumon, <span>President at ...</span></h3>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-12">--}}
{{--							<div class="single-feedback">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/work-image/sw2.jpeg" alt="image">--}}

{{--								<p>"Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh."</p>--}}

{{--								<h3>John Smith, <span>CEO at ThemeForest</span></h3>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-12">--}}
{{--							<div class="single-feedback">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/client-image/sw3.jpg" alt="image">--}}

{{--								<p>"Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh.Hope, One day you will be Bangladesh."</p>--}}

{{--								<h3>David Warner, <span>CEO at ThemeForest</span></h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<img src="{{ asset('frontend') }}/assets/img/quote.png" class="quote-img" alt="quote">--}}
{{--		</section>--}}
{{--		<!-- End Feedback Area -->--}}

{{--		<!-- Start How Its Work Area -->--}}
{{--		<section class="how-we-work ptb-120">--}}
{{--			<div class="container">--}}
{{--				<div class="section-title">--}}
{{--					<span class="wow fadeInUp">Around the World</span>--}}
{{--					<h2 class="wow fadeInDown">Superior design & concept work</h2>--}}
{{--				</div>--}}

{{--				<div class="row">--}}
{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-work-box">--}}
{{--							<div class="number">--}}
{{--								01--}}
{{--							</div>--}}
{{--							<h3>Research</h3>--}}
{{--							<p>Quis ipsum suspendisse ultrices gravida Risus.</p>--}}

{{--							<i class="icofont-light-bulb"></i>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-work-box">--}}
{{--							<div class="number">--}}
{{--								02--}}
{{--							</div>--}}
{{--							<h3>UI Design</h3>--}}
{{--							<p>Quis ipsum suspendisse ultrices gravida Risus.</p>--}}

{{--							<i class="icofont-ruler-alt-2"></i>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-work-box">--}}
{{--							<div class="number">--}}
{{--								03--}}
{{--							</div>--}}
{{--							<h3>Development</h3>--}}
{{--							<p>Quis ipsum suspendisse ultrices gravida Risus.</p>--}}

{{--							<i class="icofont-calculator"></i>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-work-box">--}}
{{--							<div class="number">--}}
{{--								04--}}
{{--							</div>--}}
{{--							<h3>Analysis</h3>--}}
{{--							<p>Quis ipsum suspendisse ultrices gravida Risus.</p>--}}

{{--							<i class="icofont-mathematical-alt-2"></i>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>--}}
{{--			<div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>--}}
{{--			<div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End How Its Work Area -->--}}

{{--		<!-- Start Team Area -->--}}
{{--		<section class="team-area bg-image ptb-120">--}}
{{--			<div class="container">--}}
{{--				<div class="section-title">--}}
{{--					<span class="wow fadeInUp">Team Member</span>--}}
{{--					<h2 class="wow fadeInDown">We have qualityful team</h2>--}}
{{--				</div>--}}

{{--				<div class="row">--}}
{{--					<div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--						<div class="single-team">--}}
{{--							<div class="team-image">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/team-image/t1.png" class="member-img" alt="team">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/team-image/team-back.jpg" class="back-image" alt="back-image">--}}

{{--								<ul class="social-links">--}}
{{--									<li><a href="#"><i class="icofont-facebook"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-twitter"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-instagram"></i></a></li>--}}
{{--								</ul>--}}
{{--							</div>--}}

{{--							<div class="team-content">--}}
{{--								<h3>Advisers</h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--						<div class="single-team">--}}
{{--							<div class="team-image">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/team-image/t2.png" class="member-img" alt="team">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/team-image/team-back.jpg" class="back-image" alt="back-image">--}}

{{--								<ul class="social-links">--}}
{{--									<li><a href="#"><i class="icofont-facebook"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-twitter"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-instagram"></i></a></li>--}}
{{--								</ul>--}}
{{--							</div>--}}

{{--							<div class="team-content">--}}
{{--								<h3>Fellow </h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">--}}
{{--						<div class="single-team">--}}
{{--							<div class="team-image">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/team-image/t3.jpg" class="member-img" alt="team">--}}
{{--								<img src="{{ asset('frontend') }}/assets/img/team-image/team-back.jpg" class="back-image" alt="back-image">--}}

{{--								<ul class="social-links">--}}
{{--									<li><a href="#"><i class="icofont-facebook"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-twitter"></i></a></li>--}}
{{--									<li><a href="#"><i class="icofont-instagram"></i></a></li>--}}
{{--								</ul>--}}
{{--							</div>--}}

{{--							<div class="team-content">--}}
{{--								<h3>Core Volunteer</h3>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--			<div class="shape2"><img src="{{ asset('frontend') }}/assets/img/shapes/2.png" alt="shape"></div>--}}
{{--			<div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>--}}
{{--			<div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--			<div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End Team Area -->--}}

{{--		<!-- Start CTA Area -->--}}
{{--		<section class="cta-area ptb-120 bg-08071c">--}}
{{--			<div class="container">--}}
{{--				<div class="cta-content">--}}
{{--					<span class="wow fadeInUp">Looking for exclusive services?</span>--}}
{{--					<h2 class="wow fadeInDown">Get the best for your business</h2>--}}
{{--					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--					<a href="#" class="btn btn-primary wow fadeInUp">Contact Us</a>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="shape5"><img src="{{ asset('frontend') }}/assets/img/shapes/5.png" alt="shape"></div>--}}
{{--			<div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>--}}
{{--			<div class="shape9 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/9.png" alt="shape"></div>--}}
{{--			<div class="shape14 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/14.png" alt="shape"></div>--}}
{{--			<div class="shape15 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/15.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End CTA Area -->--}}

{{--		<!-- Start Skill Area -->--}}
{{--		<section class="skill-area">--}}
{{--			<div class="container">--}}
{{--				<div class="row h-100 align-items-center">--}}
{{--					<div class="col-lg-6 col-md-12">--}}
{{--						<div class="our-skill">--}}
{{--							<div class="section-title">--}}
{{--								<span class="wow fadeInUp">Why Choose Us</span>--}}
{{--								<h2 class="wow fadeInDown">Some of Our Skills</h2>--}}
{{--								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--							</div>--}}

{{--							<div class="skills">--}}
{{--								<div class="skill-item">--}}
{{--									<div class="skill-header">--}}
{{--										<h3 class="skill-title">Branding</h3>--}}

{{--										<div class="skill-percentage">--}}
{{--											<div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>--}}
{{--										</div>--}}
{{--									</div>--}}

{{--									<div class="skill-bar">--}}
{{--										<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="skill-item">--}}
{{--									<div class="skill-header">--}}
{{--										<h3 class="skill-title">Marketing</h3>--}}

{{--										<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>--}}
{{--									</div>--}}

{{--									<div class="skill-bar">--}}
{{--										<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="skill-item">--}}
{{--									<div class="skill-header">--}}
{{--										<h3 class="skill-title">Design</h3>--}}

{{--										<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>--}}
{{--									</div>--}}

{{--									<div class="skill-bar">--}}
{{--										<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>--}}
{{--									</div>--}}
{{--								</div>--}}

{{--								<div class="skill-item">--}}
{{--									<div class="skill-header">--}}
{{--										<h3 class="skill-title">Development</h3>--}}

{{--										<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>--}}
{{--									</div>--}}

{{--									<div class="skill-bar">--}}
{{--										<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-6 col-md-12">--}}
{{--						<div class="skill-image">--}}
{{--							<img src="{{ asset('frontend') }}/assets/img/Iqbal_Bahar_Zahid.jpg" class="man-image" alt="man">--}}
{{--							<img src="{{ asset('frontend') }}/assets/img/shapes/16.png" class="back-image" alt="shape">--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section>--}}
{{--		<!-- End Skill Area -->--}}

{{--		<!-- Start Fun Fact Area -->--}}
{{--		<section class="funfacts-area ptb-120 bg-38d16a">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-lg-3 col-md-3 col-sm-6">--}}
{{--						<div class="funfact">--}}
{{--							<h3><span class="odometer" data-count="456,112">00</span></h3>--}}
{{--							<p>Facebook Page Followers</p>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-3 col-sm-6">--}}
{{--						<div class="funfact">--}}
{{--							<h3><span class="odometer" data-count="234,000">00</span></h3>--}}
{{--							<p>Facebook Group Community</p>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-3 col-sm-6">--}}
{{--						<div class="funfact">--}}
{{--							<h3><span class="odometer" data-count="74,800">00</span></h3>--}}
{{--							<p>Youtube Subscribers</p>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-3 col-sm-6">--}}
{{--						<div class="funfact">--}}
{{--							<h3><span class="odometer" data-count="20">00</span></h3>--}}
{{--							<p>Awards </p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--			<div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>--}}
{{--		</section>--}}
{{--		<!-- End Fun Fact Area -->--}}

{{--		<!-- Start Blog Area -->--}}
{{--		<section class="blog-area ptb-120">--}}
{{--			<div class="container">--}}
{{--				<div class="section-title">--}}
{{--					<span class="wow fadeInUp">Latest Blog</span>--}}
{{--					<h2 class="wow fadeInDown">Read Inspirational Story every week</h2>--}}
{{--				</div>--}}

{{--				<div class="row">--}}
{{--					<div class="col-lg-4 col-md-6">--}}
{{--						<div class="single-blog-post">--}}
{{--							<div class="blog-image">--}}
{{--								<a href="#"><img src="{{ asset('frontend') }}/assets/img/blog-image/ticket.jpg" alt="image"></a>--}}

{{--								<div class="post-tag">--}}
{{--									<a href="#">News</a>--}}
{{--								</div>--}}
{{--							</div>--}}

{{--							<div class="blog-post-content">--}}
{{--								<span class="date">1 Nov, 2020</span>--}}
{{--								<h3><a href="#">৯ জানুয়ারি ২০২১ আমাদের প্লাটফর্মের উদ্যোক্তা সম্মেলন ও তৃতীয় প্রতিষ্ঠা বার্ষিকী উপলক্ষে অনলাইনে রেজিস্ত্রেশান ও টিকিট দেয়া ...</a></h3>--}}
{{--								<a href="#" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-4 col-md-6">--}}
{{--						<div class="single-blog-post">--}}
{{--							<div class="blog-image">--}}
{{--								<a href="#"><img src="{{ asset('frontend') }}/assets/img/blog-image/award.jpg" alt="image"></a>--}}

{{--								<div class="post-tag">--}}
{{--									<a href="#">Awards</a>--}}
{{--								</div>--}}
{{--							</div>--}}

{{--							<div class="blog-post-content">--}}
{{--								<span class="date">1 Dec, 2019</span>--}}
{{--								<h3><a href="#">দশম সিএমও এশিয়া পুরস্কারে বছরের সবচেয়ে প্রসংশনীয় উদ্যোক্তা হয়েছেন ইকবাল বাহার জাহিদ। তিনি তরুণদের নিয়ে দেশে ‘নিজের বলার মতো একটা</a></h3>--}}
{{--								<a href="#" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">--}}
{{--						<div class="single-blog-post">--}}
{{--							<div class="blog-image">--}}
{{--								<a href="#"><img src="{{ asset('frontend') }}/assets/img/blog-image/paper.jpg" alt="image"></a>--}}

{{--								<div class="post-tag">--}}
{{--									<a href="#">Media</a>--}}
{{--								</div>--}}
{{--							</div>--}}

{{--							<div class="blog-post-content">--}}
{{--								<span class="date">28 Feb, 2019</span>--}}
{{--								<h3><a href="#">পুরো পাতা জুড়ে "নিজের বলার মতো একটা গল্প" এর আদ্যোপান্ত দৈনিক খোলা কাগজে ফিচার করা হয়েছে। এছাড়াও.........</a></h3>--}}
{{--								<a href="#" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section>--}}
{{--		<!-- End Blog Area -->--}}

{{--		<!-- Start Partner Area -->--}}
{{--		<div class="partner-area ptb-120 bg-38d16a">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="partner-slides owl-carousel owl-theme">--}}
{{--						<div class="col-lg-12">--}}
{{--							<div class="partner-item">--}}
{{--								<a href="#">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-12">--}}
{{--							<div class="partner-item">--}}
{{--								<a href="#">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-12">--}}
{{--							<div class="partner-item">--}}
{{--								<a href="#">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-12">--}}
{{--							<div class="partner-item">--}}
{{--								<a href="#">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--						</div>--}}

{{--						<div class="col-lg-12">--}}
{{--							<div class="partner-item">--}}
{{--								<a href="#">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/partner-image/1/1.png" alt="image">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		<!-- End Partner Area -->--}}

{{--		<!-- Start Contact CTA Area -->--}}
{{--		<section class="contact-cta-area ptb-120">--}}
{{--			<div class="container">--}}
{{--				<div class="contact-cta-content">--}}
{{--					<div class="section-title">--}}
{{--						<span class="wow fadeInUp">Get in Touch</span>--}}
{{--						<h2 class="wow fadeInDown">Want to work with us? Lets talk about project!</h2>--}}
{{--					</div>--}}

{{--					<p>We are a trusted team to do any kind of social work with honesty. You may depend on us.</p>--}}
{{--					<a href="#" class="btn btn-primary wow fadeInUp">Contact Us</a>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<div class="shape13"><img src="{{ asset('frontend') }}/assets/img/shapes/13.png" alt="shape"></div>--}}
{{--			<div class="shape18"><img src="{{ asset('frontend') }}/assets/img/shapes/18.png" alt="shape"></div>--}}
{{--			<div class="shape19"><img src="{{ asset('frontend') }}/assets/img/shapes/19.png" alt="shape"></div>--}}
{{--			<div class="shape20 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/20.png" alt="shape"></div>--}}
{{--			<div class="shape21"><img src="{{ asset('frontend') }}/assets/img/shapes/21.png" alt="shape"></div>--}}
{{--			<div class="shape22"><img src="{{ asset('frontend') }}/assets/img/shapes/22.png" alt="shape"></div>--}}
{{--		</section>--}}
{{--		<!-- End Contact CTA Area -->--}}

{{--		<!-- Start Footer Area -->--}}
{{--		<footer class="footer-area ptb-120 pb-0">--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-footer-widget">--}}
{{--							<div class="logo wow fadeInUp">--}}
{{--								<a href="#">--}}
{{--									<img src="{{ asset('frontend') }}/assets/img/logoye.png" alt="logo">--}}
{{--								</a>--}}
{{--							</div>--}}
{{--							<p>11 batches are completed with consecutive 90 days sessions without any break to 400,000 from 64 Districts of Bangladesh & Non- Residents Bangladeshi (NRB) from 50 Countries and it is to be continued.</p>--}}

{{--							<ul class="social-links">--}}
{{--								<li><a href="#"><i class="icofont-facebook"></i></a></li>--}}
{{--								<li><a href="#"><i class="icofont-twitter"></i></a></li>--}}
{{--								<li><a href="#"><i class="icofont-instagram"></i></a></li>--}}
{{--								<li><a href="#"><i class="icofont-pinterest"></i></a></li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-footer-widget ml-4">--}}
{{--							<h3 class="wow fadeInUp">Quick Links</h3>--}}

{{--							<ul class="list">--}}
{{--								<li><a href="#">Home</a></li>--}}
{{--								<li><a href="#">About</a></li>--}}
{{--								<li><a href="#">Portfolio</a></li>--}}
{{--								<li><a href="#">News</a></li>--}}
{{--								<li><a href="#">Contact</a></li>--}}
{{--								<li><a href="#">FAQ's</a></li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-footer-widget">--}}
{{--							<h3 class="wow fadeInUp">Recent Post</h3>--}}

{{--							<ul class="footer-recent-post">--}}
{{--								<li>--}}
{{--									<a href="#">The Most Popular New Business Apps</a>--}}

{{--									<span>25 Feb, 2019</span>--}}
{{--								</li>--}}

{{--								<li>--}}
{{--									<a href="#">The Best Marketing Management Tools</a>--}}

{{--									<span>27 Feb, 2019</span>--}}
{{--								</li>--}}

{{--								<li>--}}
{{--									<a href="#">3 WooCommerce Plugins to Boost Sales</a>--}}

{{--									<span>28 Feb, 2019</span>--}}
{{--								</li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}

{{--					<div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--						<div class="single-footer-widget">--}}
{{--							<h3 class="wow fadeInUp">Get in Touch</h3>--}}

{{--							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>--}}

{{--							<ul class="footer-contact-info">--}}
{{--								<li>--}}
{{--									<i class="icofont-google-map"></i>--}}
{{--									<span>Location:</span>--}}
{{--									27 Division St, New York, NY 10002, USA--}}
{{--								</li>--}}

{{--								<li>--}}
{{--									<i class="icofont-phone"></i>--}}
{{--									<span>Phone:</span>--}}
{{--									<a href="#">+44 014799584</a>--}}
{{--								</li>--}}

{{--								<li>--}}
{{--									<i class="icofont-email"></i>--}}
{{--									<span>Email:</span>--}}
{{--									<a href="#">support@artflex.com</a>--}}
{{--								</li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<div class="copyright-area">--}}
{{--					<div class="row">--}}
{{--						<div class="col-lg-6 col-md-6 wow fadeInDown">--}}
{{--							<p>Copyright @2018-2020. All rights reserved by NBMEG.</p>--}}
{{--						</div>--}}

{{--						<div class="col-lg-6 col-md-6 text-right wow fadeInLeft">--}}
{{--							<p>Design & Developed by <a href="https://zariq.com.bd" target="_blank">Zariq</a></p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}

{{--			<img src="{{ asset('frontend/assets/img/line-bg.png') }}" class="line-bg" alt="line-bg">--}}
{{--			<div class="shape23"><img src="{{ asset('frontend/assets/img/shapes/23.png') }}" alt="shape"></div>--}}
{{--			<div class="shape24"><img src="{{ asset('frontend/assets/img/shapes/24.png') }}" alt="shape"></div>--}}
{{--			<div class="shape25"><img src="{{ asset('frontend/assets/img/shapes/25.png') }}" alt="shape"></div>--}}
{{--			<div class="shape18"><img src="{{ asset('frontend/assets/img/shapes/18.png') }}" alt="shape"></div>--}}
{{--			<div class="shape26"><img src="{{ asset('frontend/assets/img/shapes/26.png') }}" alt="shape"></div>--}}
{{--			<div class="shape7"><img src="{{ asset('frontend/assets/img/shapes/7.png') }}" alt="shape"></div>--}}
{{--			<div class="shape27"><img src="a{{ asset('ssets/img/shapes/27.png') }}" alt="shape"></div>--}}
{{--			<div class="shape21"><img src="{{ asset('frontend/assets/img/shapes/21.png') }}" alt="shape"></div>--}}
{{--		</footer>--}}
{{--		<!-- End Footer Area -->--}}

{{--		<div class="go-top"><i class="icofont-hand-drawn-up"></i></div>--}}

{{--        <!-- Jquery Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>--}}
{{--        <!-- Popper Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>--}}
{{--        <!-- Bootstrap Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>--}}
{{--		<!-- Masonary Min JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/masonry.pkgd.min.js') }}"></script>--}}
{{--		<!-- Meanmenu Min JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>--}}
{{--		<!-- Owl Carousel Min JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>--}}
{{--        <!-- WOW Min JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>--}}
{{--		<!-- Appear Min JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>--}}
{{--		<!-- Odometer Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>--}}
{{--        <!-- Nice Select Min JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>--}}
{{--        <!-- Magnific Popup Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>--}}
{{--        <!-- Form Validator Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>--}}
{{--        <!-- Contact Form Min JS -->--}}
{{--        <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>--}}
{{--        <!-- Artflex Map JS FILE -->--}}
{{--        <script src="{{ asset('frontend/assets/js/artflex-map.js') }}"></script>--}}
{{--        <!-- Main JS -->--}}
{{--		<script src="{{ asset('frontend/assets/js/main.js') }}"></script>--}}
{{--    </body>--}}
{{--</html>--}}
