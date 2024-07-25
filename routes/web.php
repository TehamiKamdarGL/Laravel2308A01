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


//---------Website Routes----------
Route::get('/', function () {
    return view('website.index');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/about', function(){
    return view('website.about');
});

Route::get('/booking', function(){
    return view('website.booking');
});
Route::get('/menu', function(){
    return view('website.menu');
});

Route::get('/service', function(){
    return view('website.service');
});
Route::get('/team', function(){
    return view('website.team');
});

Route::get('/testimonials', function(){
    return view('website.testimonials');
});




// Route::get('/admin', [AdminController::class , 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        
        if(Auth::User()->role==1){
            return view('website.index');
            }
            else{
            return view('admin.index');
            }
            
    })->name('dashboard');
});

//---------Admin Routes----------
Route::get('/insertproduct', [AdminController::class, 'insertproduct']);
Route::get('/insert', [AdminController::class, 'insert']);