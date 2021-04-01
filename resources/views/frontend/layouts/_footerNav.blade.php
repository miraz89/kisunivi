<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <div class="logo wow fadeInUp">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/img/logoye.png" alt="logo">
                    </a>
                </div>
                <p>11 batches are completed with consecutive 90 days sessions without any break to 400,000 from 64 Districts of Bangladesh & Non- Residents Bangladeshi (NRB) from 50 Countries and it is to be continued.</p>

                <ul class="social-links">
                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                    <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget ml-4">
                <h3 class="wow fadeInUp">Quick Links</h3>

                <ul class="list">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a href="{{ route('about.bangla') }}">About</a></li>
                    <li><a href="{{ route('blog.all') }}">Blog</a></li>
                    <li><a href="{{ route('news.all') }}">News</a></li>
                    <li><a href="{{ route('session.text') }}">Session</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h3 class="wow fadeInUp">Recent Post</h3>

                <ul class="footer-recent-post">
                    @foreach($posts as $post)
                    <li>
                        <a href="{{ route('blog.details',$post->id) }}">{{ $post->title }}</a>

                        <span>{{ date('d M Y',strtotime($post->date)) }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h3 class="wow fadeInUp">Get in Touch</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                <ul class="footer-contact-info">
                    <li>
                        <i class="icofont-google-map"></i>
                        <span>Location:</span>
                        27 Division St, New York, NY 10002, USA
                    </li>

                    <li>
                        <i class="icofont-phone"></i>
                        <span>Phone:</span>
                        <a href="#">+44 014799584</a>
                    </li>

                    <li>
                        <i class="icofont-email"></i>
                        <span>Email:</span>
                        <a href="#">support@artflex.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        @include('frontend.layouts._footer')
</div>

<img src="{{ asset('frontend/assets/img/line-bg.png') }}" class="line-bg" alt="line-bg">
<div class="shape23"><img src="{{ asset('frontend/assets/img/shapes/23.png') }}" alt="shape"></div>
<div class="shape24"><img src="{{ asset('frontend/assets/img/shapes/24.png') }}" alt="shape"></div>
<div class="shape25"><img src="{{ asset('frontend/assets/img/shapes/25.png') }}" alt="shape"></div>
<div class="shape18"><img src="{{ asset('frontend/assets/img/shapes/18.png') }}" alt="shape"></div>
<div class="shape26"><img src="{{ asset('frontend/assets/img/shapes/26.png') }}" alt="shape"></div>
<div class="shape7"><img src="{{ asset('frontend/assets/img/shapes/7.png') }}" alt="shape"></div>
<div class="shape27"><img src="a{{ asset('ssets/img/shapes/27.png') }}" alt="shape"></div>
<div class="shape21"><img src="{{ asset('frontend/assets/img/shapes/21.png') }}" alt="shape"></div>
