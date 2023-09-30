<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('username')->unique();

            $table->string('email');
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();

            $table->string('password');
            $table->string('role');
            $table->integer('gender')->nullable();
            $table->integer('marital_status')->nullable();
            $table->integer('is_alcoholic')->nullable();
            $table->integer('is_smoker')->nullable();
            $table->integer('taking_medicine')->nullable();
            $table->string('comments')->nullable();
            
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
