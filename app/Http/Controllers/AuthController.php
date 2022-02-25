<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    

    public function login_view()
    {
        return view('pages.auth.login');
    }



    public function login(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->failed()):
            return back()->with('errors', 'Oups! Les champs qui sont requis!');
        endif;


        $email = $request->email;
        $password = $request->password;

        $checked_user= DB::table('users')->where('email',$email)->first();
        
        if(! $checked_user || ! Hash::check($password, $checked_user->password)):
            return back()->with('errors', 'Adresse email ou mot de passe inconnu!');
        endif;

        $credentials = request(['email', 'password']);

        
        if(!Auth::attempt($credentials)):
            return back()->with('errors', 'Connexion echoué!');
        endif;




        $checked_user_role = DB::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('users.id', '=',$checked_user->id)->first();


        if(isset($checked_user_role)):
            $user_role = DB::table('roles')
                ->join('role_user', 'roles.id', '=', 'role_user.role_id')->where('roles.id', '=',$checked_user_role->role_id)->first();
        endif;

        if($checked_user):
            Session::put('user_role', $user_role->name);
            return redirect()->route('front_client')->with('success', 'Connexion établie');
        else:
            return back()->with('errors', 'Connexion échouée');
        endif;

    
    }


    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
