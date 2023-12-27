<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        // Add any other fields you have in your places table
    ];

    public $timestamps = false; // Disable timestamps

    // Any additional model logic, relationships, etc.
}