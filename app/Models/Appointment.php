<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';


    protected $fillable = [
        'id',
        'patient_id',
        'doctor_id',
        'date',
        'status',
        'schedule_id',
        'appointment_time'
    ];

    protected $primaryKey = 'id';
    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }
}
