<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\ContactInformation;
use App\Models\Inquiry;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {

            $contact = ContactInformation::first();
            $view->with('contact', $contact);

            $testimonialView = Testimonial::all();
            $view->with('testimonialView', $testimonialView);


            $trainingTestimonials = Testimonial::where('service_type', 'Training Service')->get();
            $view->with('trainingTestimonials', $trainingTestimonials);
            // dd($trainingTestimonials);

            $projectManagementTestimonials = Testimonial::where('service_type', 'Project Management Service')->get();
            $view->with('projectManagementTestimonials', $projectManagementTestimonials);


            $inquiryCount = Inquiry::count();
            $view->with('inquiryCount', $inquiryCount);


            $subAdminCount = User::Where('role_as', "2")->count();
            $view->with('subAdminCount', $subAdminCount);

            $superAdminCount = User::Where('role_as', "1")->count();
            $view->with('superAdminCount', $superAdminCount);

            $testimonialCount = Testimonial::count();
            $view->with('testimonialCount', $testimonialCount);


            $blogCount = Blog::count();
            $view->with('blogCount', $blogCount);




            // blogs in frontend
            $all_blogs = Blog::orderBy('created_at', 'desc')->Paginate(2);
            $view->with('all_blogs', $all_blogs);
        });
    }
}
