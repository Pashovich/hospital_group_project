<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DoctorDashboardController extends Controller
{
    public function login_show(){
        return view('doctor_login');
    }

    public function login_doctor(){

        validator(request()->all(), [
            'email' =>['required','email'],
            'password' =>['required']
        ])->validate();
        
        
        if (auth()->guard('doctors')->attempt(request()->only(['email','password'])))
        {
            return redirect(route('doctor_dashboard'));
        }   
        return redirect()->back()->withErrors(['email'=>"Invalid "]);
    }

    public function dashboard_home(){

        $doctor = auth()->guard('doctors')->user();
        $upcomming_users = DB::select('select * from appointments a inner join 
        (select * from users) t on t.id = a.patient_id where doctor_id = ? order by a.date,a.time',
         [auth()->guard('doctors')->id()]);
        

        foreach ($upcomming_users as $appointment) {
            // Convert the date to a Carbon instance
            $date = Carbon::parse($appointment->date);
            
            // Format the date as "01 DayOfTheWeek ShortenedMonth"
            $formattedDate = $date->format('d l M');
            
            // Update the original stdClass object with the formatted date
            $appointment->date = $formattedDate;
        }
        return view('doctor_dashboard', ['doctor'=>$doctor, 'appointments'=>$upcomming_users]);

    }

    public function doctor_logout(){
        auth()->guard('doctors')->logout();
        return redirect(route('doctor_login'));
    }
}
