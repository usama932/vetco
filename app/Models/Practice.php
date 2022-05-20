<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $table = 'role_user';
    use HasFactory;
    protected $fillable = [
        'day',
        'time',
        'pet_id',
        'user_id',
        'service_id',
        'service_price'
    ];
}
