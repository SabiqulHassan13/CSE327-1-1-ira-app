<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Role;
use App\Course;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // User role_id pass for role based registration
        View::composer('auth.register',function ($view) {
            $roles = Role::where('id', '>', 1)->get();
            $view->with('roles', $roles);            
        });

        // Share courses in frontend
        View::composer('frontend.home.home',function ($view) {
            // $courses = Course::with(['user'])->get();
            $courses = Course::with(['user'])->latest()->paginate(2);
            $view->with('courses', $courses);            
        });

    }
}
