<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FlutterwaveController;
use  App\Http\Controllers\Admin\FrontendController;

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
    return view('welcome');
})->name('welcome');
Route::get('/form', function () {
    return view('form');
})->name('form');
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/student', function () {
    return view('ramadan.student');
})->name('student');
Route::get('/tutor', function () {
    return view('ramadan.tutor');
})->name('tutor');
Route::get('/registar', function () {
    return view('ramadan.register');
})->name('registar');
Route::get('/apply', function () {
    return view('ramadan.apply');
})->name('apply');
Route::post('/congrats', function () {
    return view('ramadan.success');
})->name('ramadansuccess');
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',  [FrontendController::class, 'index'])->name('dashboard');

});
