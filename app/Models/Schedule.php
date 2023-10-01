<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';


    protected $fillable = [
        'id',
        'time',
        'day_of_the_week',
        'doctor_id'
    ];
    protected $primaryKey = 'id';

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function appointments()
{
    return $this->hasMany(Appointment::class, 'schedule_id', 'id');
}
}
