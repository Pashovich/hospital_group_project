<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Schedule::insert(
            [
                [
                    'doctor_id' =>1,
                    'day_of_the_week' => 'Monday',
                    'time' => '10:00'
                ],
                [
                    'doctor_id' =>1,
                    'day_of_the_week' => 'Monday',
                    'time' => '12:00'
                ],
                [
                    'doctor_id' =>1,
                    'day_of_the_week' => 'Friday',
                    'time' => '10:00'
                ],
                [
                    'doctor_id' =>1,
                    'day_of_the_week' => 'Friday',
                    'time' => '13:00'
                ],
                [
                    'doctor_id' =>2,
                    'day_of_the_week' => 'Monday',
                    'time' => '12:00'
                ],
                [
                    'doctor_id' =>2,
                    'day_of_the_week' => 'Monday',
                    'time' => '12:30'
                ],
                [
                    'doctor_id' =>2,
                    'day_of_the_week' => 'Tuesday',
                    'time' => '10:00'
                ],
                [
                    'doctor_id' =>2,
                    'day_of_the_week' => 'Tuesday',
                    'time' => '13:00'
                ],
            ]
            );
    }
}
