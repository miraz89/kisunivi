@extends('frontend.layouts.master')
@section('single-news')
    <div class="page-title-area item-bg1">
        <div class="container">
            <h1>Blog Details</h1>
            <ul>
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Single Post</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details">
                        <div class="article-img">
                            <img src="{{ asset($singleNews->photo) }}" alt="blog-details">
                            <div class="date">{{ date('d M Y',strtotime($singleNews->date)) }}</div>
                        </div>

                        <div class="article-content">


                            <h3>{{ $singleNews->title }}</h3>

                            {!!  $singleNews->description  !!}

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar">

                        <div class="sidebar mt-0">

                            <div class="widget widget_categories">
                                <h3 class="widget-title">
                                    <span>Categories</span>
                                </h3>

                                <ul>
                                    @foreach($categories as $category)
                                        <li><a href="#">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget widget_recent_entries">
                                <h3 class="widget-title">
                                    <span>Recent News</span>
                                </h3>

                                <ul>
                                    @foreach($allNews as $news)
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset($news->photo) }}" alt="image">
                                            </a>

                                            <h5><a href="#">{{ $news->title }}</a></h5>
                                            <p class="date">{{ date('d M Y',strtotime($news->date)) }}</p>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection

