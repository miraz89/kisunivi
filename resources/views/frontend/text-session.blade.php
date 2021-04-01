@extends('frontend.layouts.master')
@section('text-session')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2">
        <div class="container">
            <h1>All Session Post:</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>All Session Post</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start FAQ Area -->
    <section class="faq-area ptb-120">
        <div class="container">
            <div class="faq-accordion">
                <ul class="accordion">
                    @foreach($textSessions as $text )
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">{{ $text->title }}</a>
                        <div class="accordion-content">{!! $text->description !!}</div>
                    </li>
                    @endforeach
               </ul>
            </div>

        </div>
    </section>
    <!-- End FAQ Area -->
    @endsection
