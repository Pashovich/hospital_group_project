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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');
Route::get('/appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');
Route::get('/record', [App\Http\Controllers\HomeController::class, 'record'])->name('record');

Route::post('/saveRoute', [UserController::class, 'save']) ->name('save');
Route::get('/doctor', [DoctorController::class, 'show'])->name('doctor');
Route::post('/doctor/login', [DoctorController::class, 'login_doctor']) ->name('login_doctor');

Route::get('/doctor_dashboard', function () {
    return view('doctor_dashboard');
});
