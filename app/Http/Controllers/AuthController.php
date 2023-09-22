<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use DB;
use Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }
    public function postRegister(Request $request)
    {
        // dd($request->all());

        // Create a new patient
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
        $patient->save();
        return redirect('login');
        // Authenticate the patient (optional)
        // auth()->login($patient);

        // Redirect or respond as needed
    }


    public function login()
    {
        return view('authentication.login');
    }

    public function postLogin(Request $request)
    {
        $checkUser = DB::table('users')
            ->where('username', $request->username)
            ->first();

        if ($checkUser && Hash::check($request->password, $checkUser->password)) {
            Session::put('id', $checkUser->id);
            Session::put('email', $checkUser->email);
            Session::put('username', $checkUser->username);
            Session::put('role', $checkUser->role);

            return redirect('patient/dashboard');
        } else {
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function patientDashboard()
    {
        $user = DB::table('users')
        ->where('id', Session::get('id'))
        ->first();
        return view('patient-dashboard',compact('user'));
    }

    public function logout()
    {
        // Clear all session data
        Session::flush();
        return redirect()->route('login'); 
    }

}
