<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
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


Route::get('/doctor_dashboard', function () {
    return view('welcome_page');
});

Route::post('/book-appointment', [AppointmentController::class, 'bookAppointment'])->name('book-appointment');
Route::get('/search-doctor', [AppointmentController::class, 'searchDoctor']);

Route::middleware(['auth.doctor:doctors'])->group(function () {
    Route::get('/doctor_dashboard', [DoctorDashboardController::class, 'dashboard_home'])->name('doctor_dashboard');
    Route::get('/doctor_dashboard_past', [DoctorDashboardController::class, 'dashboard_past'])->name('doctor_dashboard_past');
    Route::get('/doctor_dashboard/logout', [DoctorDashboardController::class, 'doctor_logout'])->name('doctor_logout');
});

Route::post('/book-appointment', [AppointmentController::class, 'bookAppointment'])->name('book-appointment');
Route::get('/search-doctor', [AppointmentController::class, 'searchDoctor']);

