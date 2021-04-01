<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.layouts._head')
</head>

<body>
<!-- Start Preloader -->
<div class="preloader">
    <div class="loader">
        <h1 class="glitched">{{ $settings->title }}</h1>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
<header id="header">
    @include('frontend.layouts._topBar')

    <div class="artflex-nav">

        @include('frontend.layouts._topNav')
        @include('frontend.layouts._searchBar')
    </div>
</header>
<!-- End Navbar Area -->

<!-- Start Sidebar Modal -->
@include('frontend.layouts._sideTopNav')
<!-- End Sidebar Modal -->

<!-- Start Digital Agency Banner -->
<div class="main-banner digital-agency-banner">
    <div id="scroll-down">
        <span class="arrow-down"></span>
        <span id="scroll-title">
					Scroll down
				</span>
    </div>

@yield('index')

@yield('about-bangla')
@yield('about-english')
@yield('blog')
@yield('single-post')
@yield('news')
@yield('single-news')
@yield('text-session')


<!-- Start Footer Area -->
<footer class="footer-area ptb-120 pb-0">
    @include('frontend.layouts._footerNav')
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class="icofont-hand-drawn-up"></i></div>

<!-- Jquery Min JS -->
@include('frontend.layouts._footerScript')
</body>
</html>
