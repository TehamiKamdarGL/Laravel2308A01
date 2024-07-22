<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('website.index');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/about', function(){
    return view('website.about');
});

Route::get('/blog-details', function(){
    return view('website.blog-details');
});
Route::get('/blog', function(){
    return view('website.blog');
});

Route::get('/project-details', function(){
    return view('website.project-details');
});
Route::get('/projects', function(){
    return view('website.projects');
});

Route::get('/service-details', function(){
    return view('website.service-details');
});
Route::get('/services', function(){
    return view('website.services');
});

Route::get('/admin1', function(){
    return view('admin.index');
});

// Route::get('/admin', [AdminController::class , 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

