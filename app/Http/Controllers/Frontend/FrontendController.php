<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\ClientPartner;
use App\Models\Lecture;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $data['about'] = About::where('id',1)->first();
        $data['choose_us'] = About::where('id',3)->first();
        $data['slider'] = Slider::orderBy('position')->first();
        $data['testimonials'] = Testimonial::where('status',User::USER_ACTIVE)->orderBy('position')->get();
        $data['teams'] = Team::where('status',User::USER_ACTIVE)->orderBy('position')->get();
        $data['all_news'] = News::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(6)->get();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        $data['clients'] = ClientPartner::where('status',User::USER_ACTIVE)->orderBy('position')->get();

        $data['settings'] = Settings::where('id',1)->first();
        return view('frontend.index',$data);
    }

    public function blog(){
        $data['settings'] = Settings::where('id',1)->first();
        $data['categories'] = Category::where('status', User::USER_ACTIVE)->orderBy('title')->get();
        $data['allposts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->get();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        return view('frontend.blog',$data);
    }

    public function singleblog($id){

        $data['settings'] = Settings::where('id',1)->first();
        $data['categories'] = Category::where('status', User::USER_ACTIVE)->orderBy('title')->get();
        $data['singlePost'] = Post::findOrFail($id);
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        return view('frontend.single-post',$data);
    }
    public function news(){
        $data['settings'] = Settings::where('id',1)->first();
//        $data['categories'] = NewsCategory::where('status', User::USER_ACTIVE)->orderBy('title')->get();
        $data['allnews'] = News::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->get();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        return view('frontend.news',$data);
    }
    public function singlenews($id){
        $data['settings'] = Settings::where('id',1)->first();
        $data['categories'] = NewsCategory::where('status', User::USER_ACTIVE)->orderBy('title')->get();
        $data['singleNews'] = News::findOrFail($id);
        $data['allNews'] = News::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        return view('frontend.single-news',$data);
    }
    public function bangla (){
        $data['settings'] = Settings::where('id',1)->first();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        $data['about'] = About::where('id',1)->first();
        return view('frontend.about-bangla',$data);
    }
    public function english (){
        $data['settings'] = Settings::where('id',1)->first();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        $data['about'] = About::where('id',2)->first();
        return view('frontend.about-english',$data);
    }

    public function textsession(){
        $data['settings'] = Settings::where('id',1)->first();
        $data['posts'] = Post::where('status',User::USER_ACTIVE)->orderBy('date','DESC')->limit(3)->get();
        $data['textSessions'] = Lecture::where('status', User::USER_ACTIVE)->orderBy('position','ASC')->get();
        return view('frontend.text-session',$data);
    }

}
