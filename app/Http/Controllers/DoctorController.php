<?php

namespace App\Http\Controllers;
use App\Models\Merchant;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show(){
        return view('doctor');
    }

    public function login_doctor(){

        validator(request()->all(), [
            'email' =>['required','email'],
            'password' =>['required']
        ])->validate();

        
        if (auth()->guard('doctors')->attempt(request()->only(['email','password'])))
        {
            return view('doctor_dashboard', ['doctor'=>auth()->guard('doctors')->user()]);
        }   
        return redirect()->back()->withErrors(['email'=>"Invalid "]);
    }
}
