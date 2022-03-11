<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\FlutterwaveController;
use  App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\StudentController;

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
Route::get('/e-academy', function () {
    return view('eacademy');
})->name('eacademy');
Route::get('/ramadan-class', function () {
    return view('ramadan');
})->name('ramadan');
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
Route::get('/congrats', function () {
    return view('ramadan.success');
})->name('ramadansuccess');
Route::get('/succcess', function () {
    return view('ramadan.paymentsuccess');
})->name('paymentsuccess');
Route::post('/tutor-create', [TutorController::class, 'apply'])->name('tutor.apply');
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',  [FrontendController::class, 'index'])->name('dashboard');
    Route::resource('/admin/student',  StudentController::class);
    Route::resource('/admin/tutor',  TutorController::class);

});
// filters
Route::get('/student/gender/male',  [StudentController::class, 'male'])->name('student.male');
Route::get('/student/gender/female',  [StudentController::class, 'female'])->name('student.female');
Route::get('/student/language/yoruba',  [StudentController::class, 'yoruba'])->name('student.yoruba');
Route::get('/student/language/igbo',  [StudentController::class, 'igbo'])->name('student.igbo');
Route::get('/student/language/hausa',  [StudentController::class, 'hausa'])->name('student.hausa');
Route::get('/student/language/others',  [StudentController::class, 'others'])->name('student.others');
Route::get('/student/preffered_days/mwf',  [StudentController::class, 'mwf'])->name('student.mwf');
Route::get('/student/preffered_days/tts',  [StudentController::class, 'tts'])->name('student.tts');
// filters
Route::get('/tutor/gender/male',  [TutorController::class, 'male'])->name('tutor.male');
Route::get('/tutor/gender/female',  [TutorController::class, 'female'])->name('tutor.female');
Route::get('/tutor/language/yoruba',  [TutorController::class, 'yoruba'])->name('tutor.yoruba');
Route::get('/tutor/language/igbo',  [TutorController::class, 'igbo'])->name('tutor.igbo');
Route::get('/tutor/language/hausa',  [TutorController::class, 'hausa'])->name('tutor.hausa');
Route::get('/tutor/language/others',  [TutorController::class, 'others'])->name('tutor.others');
Route::get('/tutor/hizb/10',  [TutorController::class, 'ten'])->name('tutor.10');
Route::get('/tutor/hizb/20',  [TutorController::class, 'twenty'])->name('tutor.20');
Route::get('/tutor/hizb/40',  [TutorController::class, 'forty'])->name('tutor.40');
Route::get('/tutor/hizb/60',  [TutorController::class, 'sixty'])->name('tutor.60');
