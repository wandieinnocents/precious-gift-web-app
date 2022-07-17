<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;




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

Route::get('/', function () {

    return view('welcome');
});


// FRONT END ROUTES
// about us
Route::resource('/about', 'App\Http\Controllers\FrontEnd\FrontEndAboutController');

// careers
Route::resource('/careers', 'App\Http\Controllers\FrontEnd\FrontEndCareerController');
// testimonials
Route::resource('/testimonials', 'App\Http\Controllers\FrontEnd\FrontEndTestimonialController');
// services
Route::resource('/works', 'App\Http\Controllers\FrontEnd\FrontEndServiceController');
// gallery
Route::resource('/pictures', 'App\Http\Controllers\FrontEnd\FrontEndGalleryController');


//posts
Route::resource('/articles', 'App\Http\Controllers\FrontEnd\FrontEndPostController');
//bookings
Route::resource('/book', 'App\Http\Controllers\FrontEnd\FrontEndBookingController');
//contact 
Route::resource('/contact', 'App\Http\Controllers\FrontEnd\FrontEndContactController');
// projects
Route::resource('/our_projects', 'App\Http\Controllers\FrontEnd\FrontEndProjectController');
// faq
Route::resource('/our_faqs', 'App\Http\Controllers\FrontEnd\FrontEndFaqController');
// team
Route::resource('/our_team', 'App\Http\Controllers\FrontEnd\FrontEndTeamController');
//donate
Route::resource('/donate', 'App\Http\Controllers\FrontEnd\FrontEndDonateController');















// BACKEND ROUTES

// Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

// middleware auth 
Route::group(['middleware' => ['auth']], function() {



// users
Route::resource('/users', 'App\Http\Controllers\UserController');

// analytics
 Route::get('/analytics', 'App\Http\Controllers\BackEnd\AnalyticsController@analytics');
// Roles
Route::resource('/roles', 'App\Http\Controllers\RoleController');
// permissions
Route::resource('/permissions', 'App\Http\Controllers\PermissionController');
// posts
Route::resource('/posts', 'App\Http\Controllers\BackEnd\PostController');
// Post category
Route::resource('/post_categories', 'App\Http\Controllers\BackEnd\PostCategoryController');

// Admin dashboard 
Route::resource('/dashboard', 'App\Http\Controllers\BackEnd\DashboardController');
// Bookings
Route::resource('/bookings', 'App\Http\Controllers\BackEnd\BookingController');
// Feedbacks
Route::resource('/feedbacks', 'App\Http\Controllers\BackEnd\FeedbackController');

// resources
Route::resource('/resources', 'App\Http\Controllers\BackEnd\ResourceController');
// resource categories
Route::resource('/resource_categories', 'App\Http\Controllers\BackEnd\ResourceCategoryController');



// Orders
Route::resource('/orders', 'App\Http\Controllers\BackEnd\OrderController');


// Gallery  category
Route::resource('/gallery_categories', 'App\Http\Controllers\BackEnd\GalleryCategoryController');
// Gallery 
Route::resource('/galleries', 'App\Http\Controllers\BackEnd\GalleryController');
// Services category
Route::resource('/service_categories', 'App\Http\Controllers\BackEnd\ServiceCategoryController');
// Services 
Route::resource('/services', 'App\Http\Controllers\BackEnd\ServiceController');
// Project category
Route::resource('/project_categories', 'App\Http\Controllers\BackEnd\ProjectCategoryController');
// Projects
Route::resource('/projects', 'App\Http\Controllers\BackEnd\ProjectController');

});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Logout
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });
