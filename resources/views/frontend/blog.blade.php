@extends('frontend.layouts.master')
@section('blog')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg1">
        <div class="container">
            <h1>Our Latest Blog</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar mt-0">
                        <div class="widget widget_search">
{{--                            <form>--}}
{{--                                <input type="text" class="form-control" placeholder="Search here...">--}}
{{--                                <button type="submit"><i class="icofont-ui-search"></i></button>--}}
{{--                            </form>--}}
                        </div>

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
                                <span>Recent Posts</span>
                            </h3>

                            <ul>
                                @foreach($posts as $post)
                                <li>
                                    <a href="#">
                                        <img src="{{ asset($post->photo) }}" alt="image">
                                    </a>

                                    <h5><a href="#">{{ $post->title }}</a></h5>
                                    <p class="date">{{ date('d M Y',strtotime($post->date)) }}</p>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        @foreach($allposts as $post)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="blog-image">
                                    <a href="#"><img src="{{ $post->photo }}" alt="image"></a>

                                    <div class="post-tag">
                                        <a href="#">{{ $post->category->title }}</a>
                                    </div>
                                </div>

                                <div class="blog-post-content">
                                    <span class="date">{{ date('d M Y',strtotime($post->date)) }}</span>
                                    <h3><a href="#">{{ $post->title }}</a></h3>
                                    <a href="{{ route('blog.details',$post->id) }}" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    @endsection
