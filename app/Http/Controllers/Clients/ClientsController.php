<?php

namespace App\Http\Controllers\Clients;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    



    public function add_clients(Request $request) 
    {
        $validator = Validator::make($request->all(), [

            'entreprise_libelle' => 'required',
            'type_entreprise' => 'required',
            'contact_client' => 'required',
            'commune_client' => 'required',
            'quarter_client' => 'required',
            'rue_client' => 'required',
            
        ]);


        if($validator->failed()):
            return back()->with('errors', 'Oups! Les champs sont requis!');
        endif;

        

        $clients_id = $this->generateClientsRef(new Clients,'clients_id', 3, 'CL');
        //dd($request->all()); die();
        $add_clients = new Clients;

        $add_clients->clients_id = $clients_id;

        $add_clients->auteur = $request->username;

        $add_clients->sigle = $request->sigle;
        $add_clients->boite_postal = $request->boite_postal;
        $add_clients->compte_contribuable = $request->compte_contribuable;
        $add_clients->registre_commerce = $request->registre_commerce;
        $add_clients->ville = $request->ville;
        $add_clients->facteur_1 = $request->facteur_1;
        $add_clients->facteur_2 = $request->facteur_2;

        $add_clients->immeuble = $request->immeuble;
        $add_clients->etage = $request->etage;
        $add_clients->porte = $request->porte;

        $add_clients->entreprise_libelle = $request->entreprise_libelle;
        $add_clients->type_entreprise = $request->type_entreprise;
        $add_clients->contacts_clients = $request->contact_client;
        $add_clients->commune_clients = $request->commune_client;
        $add_clients->quartier_clients = $request->quarter_client;
        $add_clients->rue_clients = $request->rue_client;
        $add_clients->dirigeant = $request->dirigeant;

        if($add_clients->save()): 
            return back()->with('success', 'Le client a été enregistré avec succès');

        else:
            return back()->with('errors', 'Enregistrement échoué! Veuillez reéssayer!');
        endif;


    }

    public function get_clients($id) {

        $get_single = Clients::all();

        $get_single_clients = $get_single->find($id);

        return view('pages.bordereau.clients.edit', compact('get_single_clients'));

    }


    public function update_clients(Request $request, $id) 
    {
        $validator = Validator::make($request->all(), [

            'entreprise_libelle' => 'required',
            'type_entreprise' => 'required',
            'contact_client' => 'required',
            'commune_client' => 'required',
            'quarter_client' => 'required',
            'rue_client' => 'required',
            'dirigeant'
            
        ]);


        if($validator->failed()):
            return back()->with('errors', 'Oups! Les champs qui sont requis!');
        endif;

        $listes_clients = Clients::all();

        $get_clients = $listes_clients->find($id);

        $get_clients->clients_id = $get_clients->clients_id;

        $get_clients->sigle = $request->sigle;
        $get_clients->boite_postal = $request->boite_postal;
        $get_clients->compte_contribuable = $request->compte_contribuable;
        $get_clients->registre_commerce = $request->registre_commerce;
        $get_clients->ville = $request->ville;
        $get_clients->facteur_1 = $request->facteur_1;
        $get_clients->facteur_2 = $request->facteur_2;

        $get_clients->immeuble = $request->immeuble;
        $get_clients->etage = $request->etage;
        $get_clients->porte = $request->porte;

        $get_clients->entreprise_libelle = $request->entreprise_libelle;
        $get_clients->type_entreprise = $request->type_entreprise;
        $get_clients->contact_client = $request->contact_client;
        $get_clients->commune_client = $request->commune_client;
        $get_clients->quarter_client = $request->quarter_client;
        $get_clients->rue_client = $request->rue_client;
        $get_clients->dirigeant = $request->dirigeant;

        if($get_clients->save()): 
            return back()->with('success', 'Le client a été modifié avec succès');

        else:
            return back()->with('errors', 'Modification échouée! Veuillez reéssayer!');
        endif;




    }


    public function destroy_clients($id)

    {
        $destroy_clients = Clients::destroy($id);

        if($destroy_clients):

            return back()->with('success', 'Supression effectuée');
        else:
            return back()->with('errors', 'Supression échouée! Veuillez reéssayer!');
        endif;
    }



    protected function generateClientsRef($model, $trow, $length = 4, $prefix){

        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $increment_last_number = ((int)$actial_last_number)+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix.'-'.$zeros.$last_number;
    }
}
