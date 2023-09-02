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
        \App\Models\User::create(
            [
                'id'=>0,
                'name' => 'Patient',
                'email' => 'doctor_one@mail.com',
                'password'=> Hash::make('password'),
            ]
            );
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
