<nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="index-6.html"><img src="{{ asset('frontend/assets/img/logoye.png') }}" alt="logo"></a>

    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ route('frontend.home') }}" class="nav-link active">Home <i class=""></i></a>
            </li>


            <li class="nav-item"><a href="#" class="nav-link">About <i class="icofont-simple-down"></i></a>
                <ul class="dropdown_menu">
                    <li class="nav-item"><a href="{{ route('about.english') }}" class="nav-link">About English</a></li>

                    <li class="nav-item"><a href="{{ route('about.bangla') }}" class="nav-link">About Bangla</a></li>


                </ul>
            </li>

            <li class="nav-item"><a href="faq.html" class="nav-link">Session <i class="icofont-simple-down"></i></a>
                <ul class="dropdown_menu">
                    <li class="nav-item"><a href="{{ route('session.text') }}" class="nav-link">Text Session</a></li>

                    <li class="nav-item"><a href="#" class="nav-link">Video Session</a></li>


                </ul>
            </li>

            <li class="nav-item"><a href="about-us.html" class="nav-link">Others <i class="icofont-simple-down"></i></a>
                <ul class="dropdown_menu">

                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>

                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registration</a></li>

                    <li class="nav-item"><a href="" class="nav-link">Event</a></li>
                    <li class="nav-item"><a href="{{ route('blog.all') }}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{ route('news.all') }}" class="nav-link">News</a></li>

                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </li>
        </ul>

        <div class="others-option">
            <ul>
{{--                <li>--}}
{{--                    <span class="search-popup-icon"><i class="icofont-ui-search"></i></span>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="cart.html" class="cart-icon">--}}
{{--                        <i class="icofont-bag"></i>--}}
{{--                        <span>0</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>

                <li data-toggle="modal" data-target="#myModal2">
                    <div class="side-menu">
                        <span class="bar-1"></span>
                        <span class="bar-2"></span>
                        <span class="bar-3"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
