<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDashboard;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('post-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post-register', [AuthController::class, 'postRegister'])->name('post-register');
Route::get('/patient/dashboard', [AuthController::class, 'patientDashboard'])->name('patient-dashboard');

Route::get('/doctor', [DoctorController::class, 'show'])->name('doctor');
Route::post('/doctor', [DoctorController::class, 'login_doctor']) ->name('login_doctor_123');

Route::get('/doctor_dashboard', [DoctorDashboard::class, 'home']) ->name('doctor_dashboard');
Route::post('/doctor_dashboard', [DoctorDashboard::class, 'doctor_logout']) ->name('doctor_logouts');
