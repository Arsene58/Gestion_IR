<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursier extends Model
{
    use HasFactory;


    protected $fileable = [
        'position',
        'validation',
        'motif',
        'depart',
        'arriver'
    ];
}
