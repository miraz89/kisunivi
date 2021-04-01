@extends('frontend.layouts.master')

@section('index')
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp">{{ $slider->title }}</h1>

                            {!! $slider->description !!}
                            <a href="#" class="btn btn-primary wow fadeInLeft">{{ $slider->button_text }}</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-image">
                            <br /><br /><br /><br />
                            <img src="{{ asset($slider->photo) }}" alt="women">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts._sideTopSocialLink')

    <div class="shape1"><img src="{{ asset('frontend/assets/img/shapes/1.png') }}" alt="shape"></div>
    <div class="shape2"><img src="{{ asset('frontend/assets/img/shapes/2.png') }}" alt="shape"></div>
    <div class="shape3"><img src="{{ asset('frontend/assets/img/shapes/3.png') }}" alt="shape"></div>
    <div class="shape4"><img src="{{ asset('frontend/assets/img/shapes/4.png') }}" alt="shape"></div>
    <div class="shape5"><img src="{{ asset('frontend/assets/img/shapes/5.png') }}" alt="shape"></div>
    <div class="shape6"><img src="{{ asset('frontend/assets/img/shapes/6.png') }}" alt="shape"></div>
    <div class="shape7"><img src="{{ asset('frontend/assets/img/shapes/7.png') }}" alt="shape"></div>
    <div class="shape8"><img src="{{ asset('frontend/assets/img/shapes/8.png') }}" alt="shape"></div>
    <div class="shape9 rotateme"><img src="{{ asset('frontend/assets/img/shapes/9.png') }}" alt="shape"></div>
    <div class="shape10 rotateme"><img src="{{ asset('frontend/assets/img/shapes/10.png') }}" alt="shape"></div>
    <div class="circle-shape1"><img src="{{ asset('frontend/assets/img/shapes/circle1.png') }}" alt="shape"></div>
    <div class="circle-shape2"><img src="{{ asset('frontend/assets/img/shapes/circle2.png') }}" alt="shape"></div>
    <div class="circle-shape3"><img src="{{ asset('frontend/assets/img/shapes/circle3.png') }}" alt="shape"></div>
    </div>
    <!-- End Digital Agency Banner -->

    <!-- Start CTA About Area -->
    <section class="cta-about">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="cta-about-image" style="background-image: url({{ asset($about->photo) }})">
                        <img src="" alt="cta-image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="cta-about-content ptb-120">
                        <div class="section-title">
                            <span class="wow fadeInUp">About Us</span>
                            <h2 class="wow fadeInDown">{{ $about->title }}</h2>
                        </div>
                        {!! $about->description !!}

                        <a href="{{ route('about.bangla') }}" class="btn btn-primary wow fadeInUp">{{ $about->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA About Area -->

    <!-- Start Services Area -->
    <section class="welcome-services ptb-120 bg-38d16a">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInUp">Our Work for People</span>
                <h2 class="wow fadeInDown">Welcome to our Organization</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="icofont-dart"></i>
                        </div>
                        <h3>Entrepreneurship Training</h3>
                        <p>"90 Days Online Training on Entrepreneurship “How to be an Entrepreneur”.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="icofont-handshake-deal"></i>
                        </div>
                        <h3>10 different Skills</h3>
                        <p>Values, Leadership, 10 different Skills & “to be a Good Human being”. These are also free</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-services">
                        <div class="icon">
                            <i class="icofont-pie-chart"></i>
                        </div>
                        <h3>Social Work</h3>
                        <p>Volunteering & Social Work. Volunteering & Social work is one of the most important issue for our organization</p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="more-services-btn wow fadeInUp">
                        <a href="services-2.html" class="btn btn-primary">More Work</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
    </section>
    <!-- End Services Area -->

    <!-- Start Why Choose Us Area -->
    <section class="why-choose-us-area ptb-120">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="why-choose-us-img">
                        <img src="{{ asset($choose_us->photo) }}" class="front-img" alt="img">
                        <img src="{{ asset('frontend') }}/assets/img/2.jpg" class="back-img" alt="img">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="why-choose-us-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">WHy Choose Us</span>
                            <h2 class="wow fadeInDown">{{ $choose_us->title }}</h2>
                        </div>
                        {!! $choose_us->description !!}
                        <a href="#" class="btn btn-primary wow fadeInUp">{!! $choose_us->button_text !!} </a>
                    </div>
                </div>
            </div>

            <div class="why-choose-inner-area">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title">
                            <h2 class="wow fadeInDown">We like to find simple solutions to complex problems</h2>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-box">
                            <div class="icon">
                                <i class="icofont-handshake-deal"></i>
                            </div>
                            <h3><a href="https://www.facebook.com/groups/youngentrepreneursbdiqbal" target="_blank">Join Our Community</a></h3>
                            <p>You may learn more than you aspact.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-box">
                            <div class="icon">
                                <i class="icofont-brand-appstore"></i>
                            </div>
                            <h3><a href="https://www.facebook.com/Iqbalbahar28" target="_blank">Follow Our Page</a></h3>
                            <p>Follow Our Page for any news or event.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-box">
                            <div class="icon">
                                <i class="icofont-bullhorn"></i>
                            </div>
                            <h3><a href="https://www.youtube.com/c/IqbalBahar/playlists" target="_blank">Learn live</a></h3>
                            <p>You may learn more on youtube</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="circle-dot"><img src="{{ asset('frontend') }}/assets/img/shapes/dot-shape1.png" alt="shape"></div>
    </section>
    <!-- End Why Choose Us Area -->

    <!-- Start Crafting Area -->
    <section class="crafting-area ptb-120 bg-f8f9fe">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInUp">About Us</span>
                <h2 class="wow fadeInDown">We are creatives with 25 years of experience</h2>
            </div>

            <div class="row h-100 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="crafting-content">
                        <div class="single-item item-one">
                            <i class="icofont-wink-smile"></i>
                            <h6>Community</h6>
                        </div>

                        <div class="single-item item-two">
                            <i class="icofont-ebook"></i>
                            <h6>Honest pricing</h6>
                        </div>

                        <div class="single-item item-three">
                            <i class="icofont-wink-smile"></i>
                            <h6>Management</h6>
                        </div>

                        <div class="single-item item-four">
                            <i class="icofont-stock-mobile"></i>
                            <h6>Mobile Design</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="crafting-image">
                        <img src="{{ asset('frontend') }}/assets/img/cta-about.jpg" alt="image">

                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-btn popup-youtube"><i class="icofont-play-alt-3"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>
        <div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>
    </section>
    <!-- End Crafting Area -->

    <!-- Start Work Area -->
    <section class="works-area ptb-120 pb-0 bg-08071c">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInUp">Our Work</span>
                <h2 class="wow fadeInDown">We have completed 150 project successfully</h2>
            </div>
        </div>

        <div class="row m-0">
            @foreach($all_news as $news)
                <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                    <div class="single-work m-0">
                        {{--                <img src="{{ asset('frontend') }}/assets/img/work-image/sw2.jpeg" alt="image">--}}
                        <img src="{{ asset($news->photo) }}" alt="image">

                        <div class="works-content">
                            <h3><a href="{{ route('news.details',$news->id) }}">{{ $news->title }}</a></h3>
                            {!! $news->description !!}
                        </div>

                        <a href="{{ route('news.details',$news->id) }}" class="link-btn"><i class="icofont-external-link"></i></a>

                        <a href="{{ asset($news->photo) }}" class="popup-btn"><i class="icofont-expand"></i></a>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="shape11"><img src="{{ asset('frontend') }}/assets/img/shapes/11.png" alt="shape"></div>
        <div class="shape12"><img src="{{ asset('frontend') }}/assets/img/shapes/12.png" alt="shape"></div>
    </section>
    <!-- End Work Area -->

    <!-- Start Feedback Area -->
    <section class="feedback-area ptb-120 bg-38d16a">
        <div class="container">
            <div class="row">
                <div class="feedback-slides owl-carousel owl-theme">
                    @foreach($testimonials as $testimonial)
                        <div class="col-lg-12">
                            <div class="single-feedback">
                                <img src="{{ asset($testimonial->photo) }}" alt="image">

                                <p>"{{ $testimonial->details }}"</p>

                                <h3> {{ $testimonial->name }} <br><span>{{ $testimonial->designation }} </span><br>
                                    <span> {{ $testimonial->company }}, </span>
                                    <span> {{ $testimonial->address }} </span>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <img src="{{ asset('frontend') }}/assets/img/quote.png" class="quote-img" alt="quote">
    </section>
    <!-- End Feedback Area -->

    <!-- Start How Its Work Area -->
    <section class="how-we-work ptb-120">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInUp">Around the World</span>
                <h2 class="wow fadeInDown">Superior design & concept work</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-work-box">
                        <div class="number">
                            01
                        </div>
                        <h3>Research</h3>
                        <p>Quis ipsum suspendisse ultrices gravida Risus.</p>

                        <i class="icofont-light-bulb"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-work-box">
                        <div class="number">
                            02
                        </div>
                        <h3>UI Design</h3>
                        <p>Quis ipsum suspendisse ultrices gravida Risus.</p>

                        <i class="icofont-ruler-alt-2"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-work-box">
                        <div class="number">
                            03
                        </div>
                        <h3>Development</h3>
                        <p>Quis ipsum suspendisse ultrices gravida Risus.</p>

                        <i class="icofont-calculator"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-work-box">
                        <div class="number">
                            04
                        </div>
                        <h3>Analysis</h3>
                        <p>Quis ipsum suspendisse ultrices gravida Risus.</p>

                        <i class="icofont-mathematical-alt-2"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>
        <div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>
    </section>
    <!-- End How Its Work Area -->

    <!-- Start Team Area -->
    <section class="team-area bg-image ptb-120">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInUp">Team Member</span>
                <h2 class="wow fadeInDown">We have qualityful team</h2>
            </div>

            <div class="row">
                @foreach($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team">
                            <div class="team-image">
                                <img src="{{ asset($team->photo) }}" class="member-img" alt="{{ asset($team->img_title) }}">
                                <img src="{{ asset('frontend') }}/assets/img/team-image/team-back.jpg" class="back-image" alt="back-image">

                                <ul class="social-links">
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="team-content">
                                <h3>{{ $team->title }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="shape2"><img src="{{ asset('frontend') }}/assets/img/shapes/2.png" alt="shape"></div>
        <div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>
        <div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>
    </section>
    <!-- End Team Area -->

    <!-- Start CTA Area -->
    <section class="cta-area ptb-120 bg-08071c">
        <div class="container">
            <div class="cta-content">
                <span class="wow fadeInUp">Looking for exclusive services?</span>
                <h2 class="wow fadeInDown">Get the best for your business</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-primary wow fadeInUp">Contact Us</a>
            </div>
        </div>

        <div class="shape5"><img src="{{ asset('frontend') }}/assets/img/shapes/5.png" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>
        <div class="shape9 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/9.png" alt="shape"></div>
        <div class="shape14 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/14.png" alt="shape"></div>
        <div class="shape15 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/15.png" alt="shape"></div>
    </section>
    <!-- End CTA Area -->

    <!-- Start Skill Area -->
    <section class="skill-area">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="our-skill">
                        <div class="section-title">
                            <span class="wow fadeInUp">Why Choose Us</span>
                            <h2 class="wow fadeInDown">Some of Our Skills</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="skills">
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h3 class="skill-title">Branding</h3>

                                    <div class="skill-percentage">
                                        <div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-header">
                                    <h3 class="skill-title">Marketing</h3>

                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
                                </div>

                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-header">
                                    <h3 class="skill-title">Design</h3>

                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
                                </div>

                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-header">
                                    <h3 class="skill-title">Development</h3>

                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
                                </div>

                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="skill-image">
                        <img src="{{ asset('frontend') }}/assets/img/Iqbal_Bahar_Zahid.jpg" class="man-image" alt="man">
                        <img src="{{ asset('frontend') }}/assets/img/shapes/16.png" class="back-image" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Area -->

    <!-- Start Fun Fact Area -->
    <section class="funfacts-area ptb-120 bg-38d16a">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="456,112">00</span></h3>
                        <p>Facebook Page Followers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="234,000">00</span></h3>
                        <p>Facebook Group Community</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="74,800">00</span></h3>
                        <p>Youtube Subscribers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="funfact">
                        <h3><span class="odometer" data-count="20">00</span></h3>
                        <p>Awards </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
    </section>
    <!-- End Fun Fact Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-120">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInUp">Latest Blog</span>
                <h2 class="wow fadeInDown">Read Inspirational Story every week</h2>
            </div>

            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="blog-image">
                                <a href="{{ route('blog.details',$post->id) }}"><img src="{{ asset($post->photo) }}" height="300px" alt="image"></a>

                                <div class="post-tag">
                                    <a href="{{ route('blog.details',$post->id) }}">{{ $post->category->title }}</a>
                                </div>
                            </div>

                            <div class="blog-post-content">
                                <span class="date">{{ $post->date }}</span>
                                <h3><a href="{{ route('blog.details',$post->id) }}">{!! $post->title !!}</a></h3>
                                <a href="{{ route('blog.details',$post->id) }}" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-120 bg-38d16a">
        <div class="container">
            <div class="row">
                <div class="partner-slides owl-carousel owl-theme">
                    @foreach($clients as $client)
                        <div class="col-lg-12">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="{{ asset($client->photo) }}" alt="{{ $client->title }}">
                                    <img src="{{ asset($client->photo) }}" alt="{{ $client->title }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Contact CTA Area -->
    <section class="contact-cta-area ptb-120">
        <div class="container">
            <div class="contact-cta-content">
                <div class="section-title">
                    <span class="wow fadeInUp">Get in Touch</span>
                    <h2 class="wow fadeInDown">Want to work with us? Lets talk about project!</h2>
                </div>

                <p>We are a trusted team to do any kind of social work with honesty. You may depend on us.</p>
                <a href="#" class="btn btn-primary wow fadeInUp">Contact Us</a>
            </div>
        </div>

        <div class="shape13"><img src="{{ asset('frontend') }}/assets/img/shapes/13.png" alt="shape"></div>
        <div class="shape18"><img src="{{ asset('frontend') }}/assets/img/shapes/18.png" alt="shape"></div>
        <div class="shape19"><img src="{{ asset('frontend') }}/assets/img/shapes/19.png" alt="shape"></div>
        <div class="shape20 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/20.png" alt="shape"></div>
        <div class="shape21"><img src="{{ asset('frontend') }}/assets/img/shapes/21.png" alt="shape"></div>
        <div class="shape22"><img src="{{ asset('frontend') }}/assets/img/shapes/22.png" alt="shape"></div>
    </section>
    <!-- End Contact CTA Area -->
    @endsection

