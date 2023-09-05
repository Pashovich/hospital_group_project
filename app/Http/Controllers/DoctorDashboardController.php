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
        $currentDateTime = now();
        $upcoming_users = DB::select('
                SELECT *
                FROM appointments a
                INNER JOIN users t ON t.id = a.patient_id
                WHERE a.date >= ? AND a.doctor_id = ?
                ORDER BY a.date, a.time
            ', [$currentDateTime, $doctor->id]);
        

        foreach ($upcoming_users as $appointment) {
            // Convert the date to a Carbon instance
            $date = Carbon::parse($appointment->date);
            
            // Format the date as "01 DayOfTheWeek ShortenedMonth"
            $formattedDate = $date->format('d l M');
            
            // Update the original stdClass object with the formatted date
            $appointment->date = $formattedDate;
        }
        return view('doctor_dashboard', ['doctor'=>$doctor, 'appointments'=>$upcoming_users]);
    }


    public function dashboard_past(){

        $doctor = auth()->guard('doctors')->user();
        $currentDateTime = now();
        $past_appointments = DB::select('
                SELECT *
                FROM appointments a
                INNER JOIN users t ON t.id = a.patient_id
                WHERE a.date < ? AND a.doctor_id = ?
                ORDER BY a.date, a.time
            ', [$currentDateTime, $doctor->id]);
        

        foreach ($past_appointments as $appointment) {
            // Convert the date to a Carbon instance
            $date = Carbon::parse($appointment->date);
            
            // Format the date as "01 DayOfTheWeek ShortenedMonth"
            $formattedDate = $date->format('d l M');
            
            // Update the original stdClass object with the formatted date
            $appointment->date = $formattedDate;
        }
        return view('doctor_dashboard_past', ['doctor'=>$doctor, 'appointments'=>$past_appointments]);
    }
    public function doctor_logout(){
        auth()->guard('doctors')->logout();
        return redirect(route('doctor_login'));
    }
}
