<div>
    <form action="">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre joueurs">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre codes 1 point">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre codes 3 points">
        <input type="number" name="" id="" min = "0" max = "500" placeholder = "Nombre codes 5 points">
        <input type="submit" value="Créer">
    </form>
</div>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>