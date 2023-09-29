<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Results;

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

    private function get_users($doctor, $comparison){
        $currentDateTime = now();

        $query = "
                SELECT *
                FROM appointments a
                INNER JOIN users t ON t.id = a.patient_id
                WHERE a.date {$comparison} '{$currentDateTime}' AND a.doctor_id = {$doctor->id}
                ORDER BY a.date, a.time
            ";

        $upcoming_users = DB::select($query);
        
        foreach ($upcoming_users as $appointment) {
            // Convert the date to a Carbon instance
            $date = Carbon::parse($appointment->date);
            
            // Format the date as "01 DayOfTheWeek ShortenedMonth"
            $formattedDate = $date->format('d l M');
            
            // Update the original stdClass object with the formatted date
            $appointment->date = $formattedDate;
        }
        return $upcoming_users;
    }

    public function dashboard_home(){
        $doctor = auth()->guard('doctors')->user();
        $upcoming_users = $this->get_users($doctor,">=");
        return view('doctor_dashboard', ['doctor'=>$doctor, 'appointments'=>$upcoming_users]);
    }

    public function dashboard_past(){
        $doctor = auth()->guard('doctors')->user();
        $upcoming_users = $this->get_users($doctor,"<");
        return view('doctor_dashboard', ['doctor'=>$doctor, 'appointments'=>$upcoming_users]);
    }
    public function doctor_logout(){
        auth()->guard('doctors')->logout();
        return redirect(route('doctor_login'));
    }

    public function show_prescription($appointment_id){
        $result = Results::where('appointment_id', $appointment_id)->first();
        if (is_null($result)) {
            
            $data = ['symptoms' => null, 'prescription' => null];
            $result = (object)$data;
        }
        return view('make_prescription', ['result' => $result, 'appointment_id' => $appointment_id]);
    }
    public function save_prescription($appointment_id){
        
        $symptoms = request()->symptom; 
        $prescription = request()->prescription;

        $resultRecord = Results::where('appointment_id', $appointment_id)->first();
        
        if ($resultRecord->doesntExist()){
            $resultRecord = new Results;
            $resultRecord->appointment_id = $appointment_id;
        }
        $resultRecord->symptoms = request()->symptom;
        $resultRecord->prescription = request()->prescription;
        $resultRecord->save();
        return $this->dashboard_home();
    }
}
