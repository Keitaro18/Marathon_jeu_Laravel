<?php $__env->startSection('container'); ?>
<div class="container-fluid d-flex flex-md-nowrap">
        <header class="d-inline flex-row">
            <img src="img/Logo.png" class="logo" alt="logo">
            <button type="button" class="btn btn-danger btn-lg d-flex flex-row">Mes Points</button>
            <button type="button" class="btn btn-danger btn-lg d-flex flex-row">Déconnexion</button>
        </header>
    
        <img src="img/Marathon.jpg" class="LogoMarathon" alt="logoMarathon">
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.masterJoueur', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>