<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commute extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_destination_id',
        'end_destination_id',
        'distance',
        'created_at',
        'updated_at',
        'fuel_consumed',
        'duration_seconds',
    ];

    // Any additional model logic, relationships, etc.
}