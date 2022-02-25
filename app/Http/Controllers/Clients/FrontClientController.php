<?php

namespace App\Http\Controllers\Clients;

use App\Models\Clients;
use App\Models\Bordereau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontClientController extends Controller
{
    

    public function __constructor() {

        $this->middleware('auth');
    }

    public function index() {


        $listes_type_entreprise = DB::table('entreprises')->value('type_entreprise');
        return view('pages.bordereau.index', compact('listes_type_entreprise'));
    }

    public function clients() {
        
        $listes_clients = Clients::all();
        $listes_type_entreprise = DB::table('entreprises')->select('type_entreprise')->get();

        //dd($listes_type_entreprise); die();
        return view('pages.bordereau.clients.index', compact('listes_clients', 'listes_type_entreprise'));
    }

    public function liste_bordereaux() {
        
        $listes_bordereaux = Bordereau::all();
        return view('pages.bordereau.liste_bordereau.index', compact('listes_bordereaux'));
    }

    public function verification() {
        
        return view('pages.bordereau.verification.index');
    }


    public function retours() {
        
        return view('pages.bordereau.retours.index');
    }

}
