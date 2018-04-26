<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/masterJoueur.css">
    <script src="js/app.js" async></script>
<title></title>
</head>
<body>
    {{-- Menu sur les pages joueur --}}
    <div class="container-fluid d-flex flex-md-nowrap">
<<<<<<< HEAD
=======
        <div class="header">
>>>>>>> origin/keitaro
            <header class="d-inline flex-row">
                <img src="img/Logo.png" class="logo" alt="logo">
                <button type="button" class="btn btn-danger btn-lg d-flex flex-row">Mes Points</button>
                <button type="button" class="btn btn-danger btn-lg d-flex flex-row">Déconnexion</button>
            </header>
<<<<<<< HEAD
        
            <img src="img/Marathon.jpg" class="LogoMarathon" alt="logoMarathon">
            
    
    {{-- Contenu de la page Joueur --}}
    @yield('contenuJoueur')
=======
        </div>    
        
        <div class="contenu">
            <img src="img/Marathon.jpg" class="LogoMarathon" alt="logoMarathon">
            
            
            {{-- Contenu de la page Joueur --}}
            @yield('contenuJoueur')
        </div>
>>>>>>> origin/keitaro
    </div>
</body>
</html>