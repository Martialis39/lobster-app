<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commute extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_destination',
        'end_destination',
        'distance',
        'created_at',
        'updated_at',
        'fuel_consumed',
        'duration',
    ];

    // Any additional model logic, relationships, etc.
}