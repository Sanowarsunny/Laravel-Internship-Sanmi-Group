<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
#Frontend 
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about_us');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/resort', function () {
    return view('resort');
})->name('resort');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
#backend
Route::get('/test', function () {
    return view('backend.test');
});

Auth::routes();

