<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorDashboardController;

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



Route::get('/doctor_dashboard/login', [DoctorDashboardController::class, 'login_show'])->name('doctor_login');
Route::post('/doctor_dashboard/login', [DoctorDashboardController::class, 'login_doctor'])->name('doctor_login');


Route::middleware(['auth.doctor:doctors'])->group(function () {
    Route::get('/doctor_dashboard', [DoctorDashboardController::class, 'dashboard_home'])->name('doctor_dashboard');
    Route::get('/doctor_dashboard_past', [DoctorDashboardController::class, 'dashboard_past'])->name('doctor_dashboard_past');
    Route::get('/doctor_dashboard/logout', [DoctorDashboardController::class, 'doctor_logout'])->name('doctor_logout');
});
