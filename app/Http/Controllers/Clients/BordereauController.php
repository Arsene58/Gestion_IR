<?php

namespace App\Http\Controllers;

use App\Models\Bordereau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BordereauController extends Controller
{
    

    public function add_bordereau(Request $request) 
    {

        $validator = Validator::make($request->all(), [
            'email_client' => 'required',
            'contact_client' => 'required',
            'commune_client' => 'required',
            'quarter_client' => 'required',
            'rue_client' => 'required',
            
        ]);


        if($validator->failed()):
            return back()->with('errors', 'Oups! Il y a des champs qui sont requis!');
        endif;


        $bordereau_id = $this->generateBordereauRef(new Bordereau,'bordereau_id', 3, 'IR');


        $add_bordereau = new Bordereau();

        $add_bordereau->bordereau_id = $bordereau_id;

        $add_bordereau->bordereau_ir = $request->bordereau_ir;
        $add_bordereau->ref_bordereau = $request->ref_bordereau;
        $add_bordereau->email_client = $request->email_client;
        $add_bordereau->destination = $request->destination;
        $add_bordereau->hover_destinataire = $request->hover_destinataire;
        $add_bordereau->nature_entreprise = $request->nature_entreprise;
        $add_bordereau->type_course = $request->type_course;
        $add_bordereau->contact_client = $request->contact_client;
        $add_bordereau->commune_client = $request->commune_client;
        $add_bordereau->quarter_client = $request->quarter_client;
        $add_bordereau->rue_client = $request->rue_client;
        $add_bordereau->type_document = $request->type_document;
        $add_bordereau->nombre_document = $request->nombre_document;
        $add_bordereau->retour_souche = $request->retour_souche;
        $add_bordereau->nombre_souche = $request->nombre_souche;
        $add_bordereau->facteur_1 = $request->facteur_1;
        $add_bordereau->facteur_2 = $request->facteur_2;
        $add_bordereau->ref_facture = $request->ref_facture;

        if($add_bordereau->save()): 
            return back()->with('succes', 'Bordereau enregistré avec succès');
        else:
            return back()->with('errors', 'Enregistrement échoué! Veuillez reéssayer!');
        endif;

    }
    



    public function get_bordereau($id) {

        $get_single = Bordereau::all();

        $get_single_borderequ = $get_single->find($id);

        return view('pages.bordereau.borderequ.edit', compact('get_single_borderequ'));

    }


    public function update_bordereau(Request $request, $id) 
    {
        $validator = Validator::make($request->all(), [

            'email_client' => 'required',
            'contact_client' => 'required',
            'commune_client' => 'required',
            'quarter_client' => 'required',
            'rue_client' => 'required',
            
        ]);


        if($validator->failed()):
            return back()->with('errors', 'Oups! Les champs qui sont requis!');
        endif;

        $listes_bordereau = Bordereau::all();

        $get_bordereau = $listes_bordereau->find($id);

        $get_bordereau->bordereau_id = $get_bordereau->bordereau_id;

        $get_bordereau->bordereau_ir = $request->bordereau_ir;
        $get_bordereau->ref_bordereau = $request->ref_bordereau;
        $get_bordereau->email_client = $request->email_client;
        $get_bordereau->destination = $request->destination;
        $get_bordereau->hover_destinataire = $request->hover_destinataire;
        $get_bordereau->nature_entreprise = $request->nature_entreprise;
        $get_bordereau->type_course = $request->type_course;
        $get_bordereau->contact_client = $request->contact_client;
        $get_bordereau->commune_client = $request->commune_client;
        $get_bordereau->quarter_client = $request->quarter_client;
        $get_bordereau->rue_client = $request->rue_client;
        $get_bordereau->type_document = $request->type_document;
        $get_bordereau->nombre_document = $request->nombre_document;
        $get_bordereau->retour_souche = $request->retour_souche;
        $get_bordereau->nombre_souche = $request->nombre_souche;
        $get_bordereau->facteur_1 = $request->facteur_1;
        $get_bordereau->facteur_2 = $request->facteur_2;
        $get_bordereau->ref_facture = $request->ref_facture;

        if($get_bordereau->save()): 
            return back()->with('succes', 'Le bordereau a été modifié avec succès');

        else:
            return back()->with('errors', 'Modification échouée! Veuillez reéssayer!');
        endif;




    }


    public function destroy_bordereau($id)

    {
        $destroy_bordereau = Bordereau::destroy($id);

        if($destroy_bordereau):

            return back()->with('success', 'Supression effectuée');
        else:
            return back()->with('errors', 'Supression échouée! Veuillez reéssayer!');
        endif;
    }
    
        
    


    protected function generateBordereauRef($model, $trow, $length = 4, $prefix){

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
