<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $data['about'] = About::where('id',1)->first();
        $data['choose_us'] = About::where('id',3)->first();
        $data['slider'] = Slider::orderBy('position')->first();
        $data['testimonials'] = Testimonial::where('status',User::USER_ACTIVE)->get();


        $data['settings'] = Settings::where('id',1)->first();
        return view('frontend.index',$data);
    }
}
