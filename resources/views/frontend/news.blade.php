@extends('frontend.layouts.master')
@section('news')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
            <h1>Our Latest News</h1>
            <ul>
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-120">
        <div class="container">
            <div class="row">
                @foreach($allnews as $news)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="#"><img src="{{ asset($news->photo) }}" alt="image"></a>

                            <div class="post-tag">
                                @if(!empty($news->newscategory->title))
                                <a href="#">{{ $news->newscategory->title }}</a>
                                    @endif
                            </div>
                        </div>

                        <div class="blog-post-content">
                            <span class="date">{{ date('d M Y',strtotime($news->date)) }}</span>
                            <h3><a href="#">{{ $news->title }}</a></h3>
                            <a href="{{ route('news.details',$news->id) }}" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
