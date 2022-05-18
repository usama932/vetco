<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    use HasFactory;
    protected $fillable = [
        'pet_id',
        'service_id',
        'date',
        'time',
        'user_id',
        'status'
    ];
}
