<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Appointment::create(
            [
                'date' => '2023-01-02',
                'time' =>'22:00',
                'notes' => 'big note',
                'status' => 'True',
                'patient_id' =>1,
                'doctor_id' => 1
            ]
            );
        \App\Models\Appointment::create(
            [
                'date' => '2023-01-02',
                'time' =>'22:00',
                'notes' => 'big note',
                'status' => 'True',
                'patient_id' =>2,
                'doctor_id' => 1
            ]
            );
        \App\Models\Appointment::create(
            [
                'date' => '2023-11-02',
                'time' =>'10:00',
                'notes' => 'big note',
                'status' => 'True',
                'patient_id' =>1,
                'doctor_id' => 2
            ]
            );
    }
}
