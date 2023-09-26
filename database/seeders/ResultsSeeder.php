<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class ResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Results::Create(
            [
                'symptoms' => 'Wild',
                'prescription' => 'Prescription One',
                'appointment_id'=> 1,
            ]
            );
        \App\Models\Results::Create(
            [
                'symptoms' => 'Sever',
                'prescription' => 'Prescription Two',
                'appointment_id'=> 2,
            ]
            );
    }
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
}
