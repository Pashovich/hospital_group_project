<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDashboard;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/doctors-schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');
Route::get('/appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');
Route::get('/medical-record', [App\Http\Controllers\HomeController::class, 'record'])->name('record');
Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


Route::get('/doctor_dashboard/login', [DoctorDashboardController::class, 'login_show'])->name('doctor_login');
Route::post('/doctor_dashboard/login', [DoctorDashboardController::class, 'login_doctor'])->name('doctor_login');

Route::middleware(['auth.doctor:doctors'])->group(function () {
    Route::get('/doctor_dashboard', [DoctorDashboardController::class, 'dashboard_home'])->name('doctor_dashboard');
    Route::get('/doctor_dashboard_past', [DoctorDashboardController::class, 'dashboard_past'])->name('doctor_dashboard_past');
    Route::get('/doctor_dashboard/logout', [DoctorDashboardController::class, 'doctor_logout'])->name('doctor_logout');
    Route::get('/doctor_dashboard/make_prescription/{appointment_id}', [DoctorDashboardController::class, 'show_prescription'])->name('prescription');
    Route::post('/doctor_dashboard/make_prescription/{appointment_id}', [DoctorDashboardController::class, 'save_prescription'])->name('save_prescription');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('post-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post-register', [AuthController::class, 'postRegister'])->name('post-register');

Route::get('/patient/dashboard', [AuthController::class, 'patientDashboard'])->name('patient-dashboard')->middleware('auth');

Route::get('/schedule/{speciality?}/{time?}', [AppointmentController::class, 'index'])->name('schedule');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('schedule.store');
Route::get('/confirmation', [AppointmentController::class, 'confirmation'])->name('confirmation');



