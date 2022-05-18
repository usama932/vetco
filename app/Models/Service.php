<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'pet_id',
        'service_price',
        'user_id'
    ];
}
