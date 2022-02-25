<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;


    protected  $fileable = [
        'bordereau_ir',
        'email',
        'expediteur',
        'destinataire',
        'hover_destinataire',
        'nature_entreprise',
        'type_course',
        'contact',
        'commune',
        'quartier',
        'rue',
        'type_doc',
        'nombre_doc',
        'retour_souche',
        'nombre_souche',
        'facteurs1',
        'facteurs2',
        'ref_facture',
        'ref_bordereau'
    ];
}
