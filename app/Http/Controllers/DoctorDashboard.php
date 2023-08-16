<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboard extends Controller
{
    public function home(){
        if(auth()->guard('doctors')->check()) {
            return view('doctor_dashboard', ['doctor'=>auth()->guard('doctors')->user()]);
        }
        return redirect(route('doctor'));
    }

    public function doctor_logout(){
        auth()->guard('doctors')->logout();
        return redirect(route('doctor'));
    }
}
