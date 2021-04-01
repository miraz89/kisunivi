@extends('frontend.layouts.master')
@section('about-bangla')

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
            <h1>About Me</h1>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start About Area -->
    <section class="about-area ptb-120">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span>About Me</span>
                            <h2>{{ $about->title }}</h2>
                        </div>
                        {!! $about->description !!}

{{--                        <a href="#" class="btn btn-primary">Download CV</a>--}}
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset($about->photo) }}" alt="about-image">
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-top rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="circle-bottom rotateme"><img src="{{ asset('frontend') }}/assets/img/circle-shape.png" alt="circle"></div>
        <div class="shape6"><img src="{{ asset('frontend') }}/assets/img/shapes/6.png" alt="shape"></div>
        <div class="shape10 rotateme"><img src="{{ asset('frontend') }}/assets/img/shapes/10.png" alt="shape"></div>
        <div class="shape7"><img src="{{ asset('frontend') }}/assets/img/shapes/7.png" alt="shape"></div>
    </section>
    <!-- End About Area -->
    @endsection
