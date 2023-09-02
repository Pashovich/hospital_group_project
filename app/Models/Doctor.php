<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = 'doctors';


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'speciality'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'password' => 'hashed',
    ];
}
