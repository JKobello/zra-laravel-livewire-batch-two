<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    /** @use HasFactory<\Database\Factories\BoatFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'capacity',
    ];

}
