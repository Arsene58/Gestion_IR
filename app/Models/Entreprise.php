<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;



    protected  $fileable = [
        'business_name',
        'type_business',
        'contacts',
        'commune',
        'quartier',
        'rue',
        'dirigeant'
    ];
}
