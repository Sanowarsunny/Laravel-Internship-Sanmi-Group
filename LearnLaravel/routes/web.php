<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\CheckAgeController;
use App\HTTP\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/data', function () {
    return "Hello Intern";
});

// Route::get('/home', function () {
//     return view('home')
// })->middleware('check');
Route::controller(CheckAgeController::class)->group(function(){
    Route::get('/home','index')->name('home.page')->middleware('check');
    Route::get('/contact','contact')->name('contact.page')->middleware('check');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);