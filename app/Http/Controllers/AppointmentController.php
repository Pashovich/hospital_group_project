<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class AppointmentController extends Controller
{
    public function bookAppointment(Request $request)
    {
        // Handle appointment booking logic
        // Display confirmation message
        return "Appointment booked with {$request->input('doctor_name')} on {$request->input('appointment_date')}.";
    }

    public function searchDoctor(Request $request)
    {
        // Handle doctor search logic
        // Display search results
        return "Search results for {$request->input('search_doctor')}:";
    }
    public function index(Request $request, $speciality = null, $time = null)
    {

        $weekFilter = $request->input('week');
        $dayOfWeekFilter = $request->input('day_of_the_week');
    
        // Retrieve the schedule data with filters
        $query = Schedule::query();
    
        if ($speciality) {
            $query->whereHas('doctor', function ($subQuery) use ($speciality) {
                $subQuery->where('speciality', $speciality);
            });
        }
    
        if ($dayOfWeekFilter) {
            $query->where('day_of_the_week', $dayOfWeekFilter);
        }
    
        // Filter schedules based on appointments within the selected week
        if ($weekFilter) {
            $startOfWeek = Carbon::parse($weekFilter)->startOfWeek();
            $endOfWeek = Carbon::parse($weekFilter)->endOfWeek();
    
            $query->whereDoesntHave('appointments', function ($subQuery) use ($startOfWeek, $endOfWeek) {
                $subQuery->whereBetween('date', [$startOfWeek, $endOfWeek]);
            });
        }
    
        $schedules = $query->get();
    
        $specialities = Doctor::distinct('speciality')->pluck('speciality');
        // dd($schedules);
        return view('schedule', compact('schedules', 'specialities'));
    }

    public function store(Request $request)
    {
        $selected_week = $request->input('week');
        if (!$selected_week){
            // dd('Error');
            $errorMessage = 'Week is required. Please select a week.';
            return redirect()->back()->withErrors(['week' => $errorMessage])->withInput();
        }

        $currentWeek = Carbon::now()->format('Y-\WW'); 
        if (Carbon::parse($selected_week)->isBefore($currentWeek)) {
            $errorMessage = 'Selected week is in the past.';
            return redirect()->back()->withErrors(['week' => $errorMessage])->withInput();
        }
        if (auth()->check()){
            $schedule_id = $request->input('schedule_id');
            $selected_day_of_week = $request->input('day_of_the_week');
    
            $start_of_week = Carbon::parse($selected_week);
            if ($selected_day_of_week =='Monday'){
                $selected_date = $start_of_week->copy();
            }
            else{
                $selected_date = $start_of_week->copy()->next($selected_day_of_week);
            }
            
            $patient_id = auth()->user()->id;
            $doctor_id = $request->input('doctor_id');
            Appointment::create([
                'schedule_id' => $schedule_id,
                'date' => $selected_date,
                'doctor_id' => $doctor_id,
                'patient_id' => $patient_id,
                'status' => "created"
            ]);
    
            return redirect()->route('confirmation')->with('success', 'Appointment created successfully');
        }
        else {
            return redirect()->route('login'); 
        }

    }

    public function confirmation()
    {
        return view('confirmation');
    }
}
