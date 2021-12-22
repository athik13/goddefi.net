<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

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
    $categories = Category::all();
    $courses = Course::with('category')->take(16)->get();
    return view('welcome', compact('categories', 'courses'));
});

Route::get('/course/all', function() {
    $categories = Category::all();
    $courses = Course::with('category')->get();
    return view('course-all', compact('categories', 'courses'));
});

Route::get('/course/{course}', function(Course $course) {
    return view('course-detail', compact('course'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
//     Route::get('/', function() {
//         return redirect('admin/category');
//     });
//     Route::resource('course', CourseController::class);
//     Route::resource('category', CategoryController::class);
// });

Route::get('blog', function() {
    return view('blog-all');
});

Route::get('blog-single', function() {
    return view('blog-single');
});

Route::get('contact-us', function() {
    return view('contact-us');
});
