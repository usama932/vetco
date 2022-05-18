<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'dob',
        'breed',
        'user_id'
    ];
}
