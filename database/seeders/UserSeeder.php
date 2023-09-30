<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users =  [
            [
                'fname' => 'patient',
                'lname' => 'First',
                'email' => 'patient_one@mail.com',
                'phone' => '3125123131231',
                'address' => '10 Street',
                'state' => 'NSW',
                'role' => '1',
                'gender' => 'Male',
                'dob' => '1999-01-01',
                'marital_status' => 'Single',
                'taking_medicine' => TRUE,
                'is_alcoholic' => TRUE,
                'is_smoker' => TRUE,
                'comments' => 'no comments',
                'password'=> Hash::make('password'),
            ],
            [
                'fname' => 'patient',
                'lname' => 'Second',
                'email' => 'patient_two@mail.com',
                'phone' => '9282727727',
                'address' => '11 Street',
                'state' => 'NSW',
                'role' => '1',
                'gender' => 'Male',
                'dob' => '1999-01-01',
                'marital_status' => 'Single',
                'taking_medicine' => TRUE,
                'is_alcoholic' => TRUE,
                'is_smoker' => TRUE,
                'comments' => 'no comments',
                'password'=> Hash::make('password'),
            ],
        ];
        \App\Models\User::Create(
            $users[0]
            );
        \App\Models\User::Create(
            $users[1]
            );
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
