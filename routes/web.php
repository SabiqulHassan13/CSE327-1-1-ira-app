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
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/team', 'FrontendController@team')->name('team');
Route::get('/contact', 'FrontendController@contact')->name('contact');

Route::get('/courses/{course}', 'FrontendController@singleCourse')->name('courses');
Route::get('/assignments/{id}/download', 'FrontendController@downloadAssignment')->name('assignments.download');
Route::get('/assignments/{id}/show', 'FrontendController@showAssignment')->name('assignments.show');




// Admin Routes
Route::group([
    'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 
    'middleware' => ['auth', 'admin']], function() {

    // Admin Dashboard
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    // Role routes
    Route::resource('roles', 'RoleController');

    // User routes
    Route::resource('users', 'UserController');

    // Course routes
    Route::resource('courses', 'CourseController');

    // Assignment routes
    Route::resource('assignments', 'AssignmentController');

});


// Teacher Routes
Route::group([
    'prefix' => 'teacher', 'namespace' => 'Teacher', 'as' => 'teacher.', 
    'middleware' => ['auth', 'teacher']], function() {

    // Teacher Dashboard
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    // Course Dashboard
    Route::get('/home', 'HomeController@home')->name('home');

    // Course routes
    Route::resource('courses', 'CourseController');

    // Assignment routes
    Route::resource('assignments', 'AssignmentController');
    Route::get('assignments/{id}/download', 'AssignmentController@download')->name('assignments.download');


});


// Student Routes
Route::group([
    'prefix' => 'student', 'namespace' => 'Student', 'as' => 'student.', 
    'middleware' => ['auth', 'student']], function() {

    // Student Dashboard
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    // Course Dashboard
    Route::get('/home', 'HomeController@home')->name('home');

    // Enrolement in Course
    Route::get('/enrolments', 'EnrolementController@index')->name('enrolment.index');
    Route::get('/enrolments/create', 'EnrolementController@create')->name('enrolment.create');
    Route::post('/enrolments', 'EnrolementController@store')->name('enrolment.store');


});