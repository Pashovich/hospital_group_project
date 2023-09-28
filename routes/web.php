<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/doctors-schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');
Route::get('/appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');
Route::get('/medical-record', [App\Http\Controllers\HomeController::class, 'record'])->name('record');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::post('/saveRoute', [UserController::class, 'save']) ->name('save');
Route::get('/doctor', [DoctorController::class, 'show'])->name('doctor');
Route::post('/doctor/login', [DoctorController::class, 'login_doctor']) ->name('login_doctor');
Route::post('/contact/store', [ContactController::class, 'store']) ->name('contact.store');

Route::get('/doctor_dashboard', function () {
    return view('doctor_dashboard');
});
