@extends('Layouts.masterJoueur')


@section('contenuJoueur')
    <p> Bienvenue , pour commencer le Marathon veuillez scanner votre carte !</p>
    
    {!! csrf_field() !!} 
    
    <form method="POST" action="" accept-charset="UTF-8">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <input type="text" class="form-control" name="code" maxlength="6" placeholder="Scanner votre carte">
        
        <input class="btn btn-danger" type="submit">Valider</button>
    
    </form> 
@stop



