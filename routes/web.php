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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/saveRoute', [UserController::class, 'save']) ->name('save');
Route::get('/doctor', [DoctorController::class, 'show'])->name('doctor');
Route::post('/doctor/login', [DoctorController::class, 'login_doctor']) ->name('login_doctor');

Route::get('/doctor_dashboard', function () {
    return view('doctor_dashboard');
});