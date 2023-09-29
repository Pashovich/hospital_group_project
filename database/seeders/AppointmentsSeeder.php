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
            ],
            [
                'date' => '2023-01-03',
                'time' =>'22:00',
                'notes' => 'big note',
                'status' => 'True',
                'patient_id' =>1,
                'doctor_id' => 1
            ]
            );
    }
}
