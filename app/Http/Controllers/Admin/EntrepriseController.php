<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EntrepriseController extends Controller
{
    //================================ ESPACE ENTREPRISE ==============================
    public function get_entreprise() //entreprise

    {

        $get_entreprise = DB::table('entreprises')
					->orderBy('id', 'desc')
					->get();
		return view('pages.admin.entreprise.index' , compact('get_entreprise'));
    }

    //entreprises store
    public function add_entreprise(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'libelle'=> 'required|string',
            'type_entreprise'=> 'required|string',
            'nature'=> 'required|string',
        ]);


        if($validator->fails()):
            return back()->with('errors', 'Oups! Les champs sont requis!');
        endif;

        //$entreprise_exist = entreprise::where('libele', trim($request->libele))->first();

        $add_entreprise = new Entreprise();
        $add_entreprise->libelle = trim($request->libelle);
        $add_entreprise->nature = trim($request->nature);
        $add_entreprise->type_entreprise = trim($request->type_entreprise);

        if($add_entreprise->save()):
            return back()->with('success', 'Opération éffectuée');
        else:
            return back()->with('errors', 'Opération échouée');
        endif;

    }

    // =========================================== Edit Entreprise ========================
    public function edit_entreprise($id)
    {
        $single_entreprise = Entreprise::all();

        $details_entreprise = $single_entreprise->first($id);

        return view('pages.admin.entreprise.details', compact('details_entreprise'));

    }
    // ===================================== End ======================================
    // =========================================== update Rubriques ========================
    public function update_entreprise(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'libelle'=> 'required|string',
            'type_entreprise'=> 'required|string',
            'nature'=> 'required|string',
        ]);
        if($validator->fails()):
            return back()->with('errors', 'Oups! Les champs sont requis!');
        endif;

        $update_entreprise = Entreprise::all();

        $first_update = $update_entreprise->first($id);

        $first_update->libele = trim($request->libele);
        $first_update->nature = trim($request->nature);
        $first_update->type_entreprise = trim($request->type_entreprise);
        $first_update->save();
        if($first_update):
            return back()->with('success', 'Opération éffectuée');
        else:
            return back()->with('errors', 'Opération échouée');
        endif;
    }
    // ===================================== End ======================================


     // =========================================== Destroy entreprise ========================
    public function destroy_entreprise(Request $request, $id)
    {
        $first_destroy = Entreprise::destroy($id);
        
        if($first_destroy):
            return back()->with('success', 'Opération éffectuée');
        else:
            return back()->with('errors', 'Opération échouée');
        endif;

    }

    // ================================ ESPACE ENTREPRISE END ==============================


}
