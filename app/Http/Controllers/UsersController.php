<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function create()
    {
        return view('Joueur.accueil');
    }

    public function store(Request $request)
    {
        $code = App\Code::where('code', request('url'))->get(); 

        if($request >= 100000 AND $request <= 101000){
                return view('Joueur.inscription');
        }

        //valider le code identifiant


    }
}
