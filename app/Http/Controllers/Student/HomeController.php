<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function dashboard() {
        return view('student.dashboard');
    }

    public function home() {
        return view('student.home');
    }
}
