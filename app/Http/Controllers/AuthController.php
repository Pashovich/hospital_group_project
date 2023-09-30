<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use DB;
use Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function register()
    {
        return view('authentication.register');
    }
    public function postRegister(Request $request)
    {

        // Create a new patient

        $martial_starus = ["" =>"", "0" => "Maried", "1" => "Signle"];
        $alcohol_status = ["" =>"", "0" => "I don't drink", "1" => "1/2 Glass/Day","2" => "3/4 Glass/Day", "3" => "More than 4 Glass/Day"];
        $patient = new User();
        $patient->fname = $request->fname;
        $patient->lname = $request->lname;
        $patient->username = $request->username;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->state = $request->state;
        $patient->role = '1';
        $patient->password = Hash::make($request->password);

        $patient->gender = $request->gender;
        $patient->dob = $request->dob;
        $patient->marital_status = $martial_starus[$request->marital_status];
        $patient->taking_medicine = $request->taking_medicine;
        $patient->is_alcoholic = $alcohol_status[$request->is_alcoholic];
        $patient->is_smoker = $request->is_smoker;
        $patient->comments = $request->comments;
        $patient->save();
        return redirect('login');
    }


    public function login()
    {
        return view('authentication.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect('patient/dashboard');
        }
        else {
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function patientDashboard()
    {
        $user =  Auth::user();
        $query = "
                SELECT *
                FROM appointments a
                left join doctors d on d.id = a.doctor_id
                WHERE patient_id = {$user->id}
            ";

        $appoitments = DB::select($query);

        return view('patient-dashboard',["appointments" => $appoitments, "user" => $user]);
    }

    public function logout()
    {
        Auth::logout();
        // Session::flush();
        return redirect()->route('login'); 
    }

}
