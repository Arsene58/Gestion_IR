<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;


    protected  $fileable = [
        'clients_id',
        'auteur',
        'sigle',
        'boite_postal',
        'compte_contribuable',
        'registre_commerce',
        'ville',
        'facteur_1',
        'facteur_2',
        'immeuble',
        'etage',
        'porte',
        'entreprise_libelle',
        'type_entreprise',
        'contacts_clients',
        'commune_clients',
        'quartier_clients',
        'rue_clients',
        'dirigeant'
    ];
}
