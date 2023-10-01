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
        \App\Models\Schedule::Create(

                [
                    'doctor_id' =>1,
                    'day_of_the_week' => 'Monday',
                    'time' => '10:00'
                ]);
        \App\Models\Schedule::Create(
        [
            'doctor_id' =>1,
            'day_of_the_week' => 'Monday',
            'time' => '12:00'
        ]);
        \App\Models\Schedule::Create(
            [
                'doctor_id' =>1,
                'day_of_the_week' => 'Monday',
                'time' => '22:00'
            ]);
        \App\Models\Schedule::Create(
            [
                'doctor_id' =>1,
                'day_of_the_week' => 'Friday',
                'time' => '10:00'
            ]);
        \App\Models\Schedule::Create(
            [
                'doctor_id' =>1,
                'day_of_the_week' => 'Monday',
                'time' => '12:00'
            ]);
        \App\Models\Schedule::Create(
            [
                'doctor_id' =>1,
                'day_of_the_week' => 'Monday',
                'time' => '13:00'
            ]);
        \App\Models\Schedule::Create(
        [
            'doctor_id' =>2,
            'day_of_the_week' => 'Monday',
            'time' => '10:00'
        ]);
        \App\Models\Schedule::Create(
        [
            'doctor_id' =>2,
            'day_of_the_week' => 'Monday',
            'time' => '12:00'
        ]);
        \App\Models\Schedule::Create(
        [
            'doctor_id' =>2,
            'day_of_the_week' => 'Monday',
            'time' => '13:00'
        ]);
        \App\Models\Schedule::Create(
        [
            'doctor_id' =>2,
            'day_of_the_week' => 'Tuesday',
            'time' => '14:00'
        ]);
        \App\Models\Schedule::Create(
            [
                'doctor_id' =>2,
                'day_of_the_week' => 'Tuesday',
                'time' => '12:00'
            ]);
        \App\Models\Schedule::Create(
            [
                'doctor_id' =>2,
                'day_of_the_week' => 'Tuesday',
                'time' => '13:00'
            ]);

    }
}
