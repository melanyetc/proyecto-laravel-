

<?php $__env->startSection('title', 'Crear proyecto'); ?>

<?php $__env->startSection('content'); ?>
    
    <h1>Crear nuevo proyecto</h1>


  


  <?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <form method="POST" action="<?php echo e(route('projects.store')); ?>">
    	
    	
        <?php echo $__env->make('projects._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    	<button>Guardar</button>
    </form>
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/projects/create.blade.php ENDPATH**/ ?>