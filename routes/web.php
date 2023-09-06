<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
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

Route::get('/welcome_page', function () {
    return view('welcome_page');
});

Route::post('/saveRoute', [UserController::class, 'save']) ->name('save');
Route::get('/doctor', [DoctorController::class, 'show'])->name('doctor');
Route::post('/doctor/login', [DoctorController::class, 'login_doctor']) ->name('login_doctor');

Route::get('/doctor_dashboard', function () {
    return view('welcome_page');
});

Route::post('/book-appointment', [AppointmentController::class, 'bookAppointment'])->name('book-appointment');
Route::get('/search-doctor', [AppointmentController::class, 'searchDoctor']);
