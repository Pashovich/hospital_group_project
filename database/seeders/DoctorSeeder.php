<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Doctor::insert(
            [
                [
                    'id'=>1,
                    'first_name' => 'Doctor',
                    'last_name' =>'One',
                    'email' => 'doctor_one@mail.com',
                    'phone' => '+42012345678',
                    'password'=> Hash::make('password'),
                    'speciality' =>'GP'
                ],
                [
                    'id'=>2,
                    'first_name' => 'Doctor',
                    'last_name' =>'Two',
                    'email' => 'doctor_two@mail.com',
                    'phone' => '+42012345679',
                    'password'=> Hash::make('password2'),
                    'speciality' =>'Surgeon'
                ]
            ]
            );
    }
}
