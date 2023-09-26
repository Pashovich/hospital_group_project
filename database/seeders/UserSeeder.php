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
                'id'=>1,
                'name' => 'Patient_1',
                'email' => 'patient_one@mail.com',
                'password'=> Hash::make('password'),
            ],
            [
                'id'=>2,
                'name' => 'Patient_2',
                'email' => 'patient_two@mail.com',
                'password'=> Hash::make('password_2'),
            ],
        ];
        \App\Models\User::insert(
            $users
            );
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
