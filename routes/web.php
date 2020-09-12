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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// Frontend Routes
Route::get('/', 'FrontendController@home')->name('home');


// Admin Routes
Route::group([
    'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 
    'middleware' => ['auth', 'admin']], function() {

    // Admin Dashboard
    Route::get('/home', 'HomeController@dashboard')->name('dashboard');

});


// Teacher Routes
Route::group([
    'prefix' => 'teacher', 'namespace' => 'Teacher', 'as' => 'teacher.', 
    'middleware' => ['auth', 'teacher']], function() {

    // Teacher Dashboard
    Route::get('/home', 'HomeController@dashboard')->name('dashboard');

});


// Student Routes
Route::group([
    'prefix' => 'student', 'namespace' => 'Student', 'as' => 'student.', 
    'middleware' => ['auth', 'student']], function() {

    // Student Dashboard
    Route::get('/home', 'HomeController@dashboard')->name('dashboard');

});