@extends('Layouts.masterJoueur')


@section('contenuJoueur')
    <p> Bienvenue , pour commencer le Marathon veuillez scanner votre carte !</p>
    
    <form action="post">
        <input type="text" class='form-control' id="code" maxlength="6" placeholder="Scanner votre carte">
        <button class="btn btn-danger" id='code' type="button">Valider</button>
    </form>    
@stop

<?php

if (($_POST['code'] <= 100000) && ($_POST['code'] >= 101000 )){

        
        header ('location : inscription');
    }
?>       
