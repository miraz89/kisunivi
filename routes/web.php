<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('frontend.index');
//});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//    Route::resource('dashboard', \App\Http\Controllers\Backend\DashboardController::class)->only([
//        'index'
//    ]);
    Route::resource('dashboard', \App\Http\Controllers\Backend\DashboradContoller::class);
    Route::resource('member', \App\Http\Controllers\Backend\MemberController::class);
    Route::resource('users',\App\Http\Controllers\Backend\UserController::class);
    Route::resource('roles',\App\Http\Controllers\Backend\RolesController::class);
    Route::resource('slider',\App\Http\Controllers\Backend\SliderController::class);
    Route::resource('client',\App\Http\Controllers\Backend\ClientPartnerController::class);
    Route::resource('profile', \App\Http\Controllers\Backend\ProfileController::class);
    Route::resource('category', \App\Http\Controllers\Backend\CategoryController::class);
    Route::resource('post', \App\Http\Controllers\Backend\PostController::class);
    Route::resource('news_category', \App\Http\Controllers\Backend\NewsCategoryController::class);
    Route::resource('news', \App\Http\Controllers\Backend\NewsController::class);
    Route::resource('member', \App\Http\Controllers\Backend\MemberController::class);
    Route::resource('testimonial', \App\Http\Controllers\Backend\TestimonialController::class);
    Route::resource('team', \App\Http\Controllers\Backend\TeamController::class);
    Route::resource('event', \App\Http\Controllers\Backend\EventController::class);
    Route::resource('session', \App\Http\Controllers\Backend\LectureController::class);
    Route::resource('settings', \App\Http\Controllers\Backend\SettingsController::class);

    Route::get('bangla','App\Http\Controllers\Backend\AboutController@bangla')->name('bangla');
    Route::put('bangla/{id}','App\Http\Controllers\Backend\AboutController@updateBangla')->name('bangla.update');

    Route::get('english','App\Http\Controllers\Backend\AboutController@english')->name('english');
    Route::put('english/{id}','App\Http\Controllers\Backend\AboutController@updateEnglish')->name('english.update');

    Route::get('choose_us','App\Http\Controllers\Backend\AboutController@choose_us')->name('choose_us');
    Route::put('choose_us/{id}','App\Http\Controllers\Backend\AboutController@updateChoose_us')->name('choose_us.update');
});

Route::get('/',[\App\Http\Controllers\Frontend\FrontendController::class,'index']);
//Route::get('registration','Laravel\Fortify\Http\Controllers\Backend\UserRegistrationController@create');
//Route::get('registration',[\App\Http\Controllers\Backend\UserRegistrationController::class,'index']);
//Route::post('registration',[\App\Http\Controllers\Backend\UserRegistrationController::class,'store']);
Route::post('registration','\App\Http\Controllers\Backend\UserRegistrationController@store')->name('registration');


Route::get('logout', function () {
    return redirect()->route('login');
});

Route::get('cpanel', function () {
    return redirect()->route('login');
});
