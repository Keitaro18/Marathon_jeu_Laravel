<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! 
|
*/
// BY JORDAN \\
//--------Dans la page d'accueil pour joueur ou admin-----
// Page d'acceuil

// include: Bienvenue + Code du joueur
Route::get('/', function() {
    return view('Joueur.accueil');
});
//--------Les pages Joueurs-------//
// include:Inscription
Route::get('/Inscription', function() {
return view('Joueur.inscription');
});
// include: Affichage des points + pointage
Route::get('/Points', function() {
return view('Joueur.points');
});
//------------------------------------------------
//---Includes Dans la page d'accueil pour l'Administrateur---\\
// include: Si BDD non créer
Route::get('/BDD', function() {
return view('Admin.BDD');
});
// include: si BDD créer
Route::get('/BDD_Gestion', function() {
return view('Admin.BDD_Gestion');
});
// include: Gestion des jeux
Route::get('/Jeux', function() {
return view('Admin.Jeux');
});
// include: Ajouter un jeux
Route::get('/AddJeux', function() {
return view('Admin.AddJeux');
});
// include: Tirage au sort
Route::get('/Tirage', function() {
return view('Admin.Tirage');
});
//---------------------------------------------------------\\