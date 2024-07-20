<?php

use App\Http\Controllers\BlogEventController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactInformationController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TrainingServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/events', function () {
    return view('events');
});


Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});

Route::get('/terms_of_service', function () {
    return view('terms_of_service');
});

Route::post('make_contact', [ContactFormController::class, 'make_contact'])->name('make_contact');


Route::post('logout', [HomeController::class, 'logout'])->name('logout');


Auth::routes();



Route::get('/blog_details/{id}', [FrontEndController::class, 'blog_details'])->name('blog_details');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isSuperAdmin'])->group(function () {
    Route::get('super_admin/dashboard', [SuperAdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    Route::get('admin/users', [SuperAdminController::class, 'users'])->name('users');

    Route::post('admin/create_sub_admin', [SuperAdminController::class, 'create_sub_admin'])->name('create_sub_admin');

    Route::get('admin/delete_sub_admin/{id}', [SuperAdminController::class, 'delete_sub_admin'])->name('delete_sub_admin');

    Route::get('admin/ban_sub_admin/{id}', [SuperAdminController::class, 'ban_sub_admin'])->name('ban_sub_admin');

    Route::get('admin/unban_sub_admin/{id}', [SuperAdminController::class, 'unban_sub_admin'])->name('unban_sub_admin');


    // profile setting
    Route::get('admin/profile_setting', [SuperAdminController::class, 'profile_setting'])->name('profile_setting');

    // In routes/web.php
    Route::post('admin/profile_update', [SuperAdminController::class, 'profile_update'])->name('profile_update');

    // In routes/web.php
    Route::post('admin/password_update', [SuperAdminController::class, 'password_update'])->name('password_update');





    // testimonials
    Route::get('admin/add_testmonial', [TestimonialController::class, 'add_testimonial'])->name('add_testimonial');

    Route::post('create_testimonial', [TestimonialController::class, 'create_testimonial'])->name('create_testimonial');

    Route::get('admin/testimonials', [TestimonialController::class, 'testimonials'])->name('testimonials');

    Route::get('admin/delete_testimonial/{id}', [TestimonialController::class, 'delete_testimonial'])->name('delete_testimonial');

    Route::get('admin/edit_testimonial/{id}', [TestimonialController::class, 'edit_testimonial'])->name('edit_testimonial');

    Route::post('admin/update_testimonial/{id}', [TestimonialController::class, 'update_testimonial'])->name('update_testimonial');





    // contact information
    Route::get('contact_information', [ContactInformationController::class, 'contact_information'])->name('contact_information');

    Route::post('store_contact_information', [ContactInformationController::class, 'store_contact_information'])->name('store_contact_information');


    // inquiry
    Route::get('inquiry', [SuperAdminController::class, 'inquiry'])->name('inquiry');

    Route::get('delete_inq/{id}', [SuperAdminController::class, 'delete_inq'])->name('delete_inq');

    Route::get('reply_inq/{id}', [SuperAdminController::class, 'reply_inq'])->name('reply_inq');

    Route::get('inquiry.read/{id}', [SuperAdminController::class, 'view_inq'])->name('view_inq');



    // News and events
    Route::get('admin/add_blog', [BlogEventController::class, 'add_blog'])->name('add_blog');

    Route::post('admin/create_blog', [BlogEventController::class, 'create_blog'])->name('create_blog');

    Route::get('admin/blogs', [BlogEventController::class, 'blogs'])->name('blogs');

    Route::get('admin/delete_blog/{id}', [BlogEventController::class, 'delete_blog'])->name('delete_blog');

    Route::get('admin/edit_blog/{id}', [BlogEventController::class, 'edit_blog'])->name('edit_blog');

    Route::post('admin/update_blog/{id}', [BlogEventController::class, 'update_blog'])->name('update_blog');


    // events
    Route::get('admin/add_event', [BlogEventController::class, 'add_event'])->name('add_event');

    Route::post('admin/create_event', [BlogEventController::class, 'create_event'])->name('create_event');

    Route::get('admin/events', [BlogEventController::class, 'events'])->name('events');

    Route::get('admin/delete_event/{id}', [BlogEventController::class, 'delete_event'])->name('delete_event');

    Route::get('admin/edit_event/{id}', [BlogEventController::class, 'edit_event'])->name('edit_event');

    Route::post('admin/update_event/{id}', [BlogEventController::class, 'update_event'])->name('update_event');




    // training service
    Route::get('admin/add_training.service', [TrainingServiceController::class, 'add_training_service'])->name('add_training_service');

    Route::post('admin/create_service', [TrainingServiceController::class, 'create_service'])->name('create_service');

    Route::get('admin/trainng.service', [TrainingServiceController::class, 'training_service'])->name('training_service');

    Route::get('admin/delete_service/{id}', [TrainingServiceController::class, 'delete_service'])->name('delete_service');

    Route::get('admin/edit_service/{id}', [TrainingServiceController::class, 'edit_service'])->name('edit_service');

    Route::post('admin/update_service/{id}', [TrainingServiceController::class, 'update_service'])->name('update_service');
});
