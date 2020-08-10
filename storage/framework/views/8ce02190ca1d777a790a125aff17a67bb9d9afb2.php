

<?php $__env->startSection('title', 'Home'); ?>
    Home


<?php $__env->startSection('content'); ?>
   <h1>Home</h1>

   <?php if(auth()->guard()->check()): ?>

        <?php echo e(auth()->user()->name); ?>


   <?php endif; ?>

<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/home.blade.php ENDPATH**/ ?>