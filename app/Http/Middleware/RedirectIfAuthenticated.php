<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 1) {
            return redirect(RouteServiceProvider::ADMIN_HOME);
            // return redirect()->route('admin.dashboard');
            // return redirect('admin/home');
        }
        else if (Auth::guard($guard)->check() && Auth::user()->role->id == 2) {
            return redirect(RouteServiceProvider::TEACHER_HOME);
            // return redirect()->route('teacher.dashboard');
        }
        else if (Auth::guard($guard)->check() && Auth::user()->role->id == 3) {
            return redirect(RouteServiceProvider::STUDENT_HOME);
            // return redirect()->route('student.dashboard');
        }
        else {
            return $next($request);
        }
    }
}
