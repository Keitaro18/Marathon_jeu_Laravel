<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function create()
    {
        return view('accueil');
    }

    public function store()
    {
        $code = request('code');

        if($code >= 100000 AND $code <= 101000)
        {
            return view('Joueur.inscription');
        }
        return view('Joueur.accueil');
    }

}
