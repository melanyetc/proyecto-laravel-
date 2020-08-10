<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title', 'Aprendible'); ?></title>
	<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
	<script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
	

</head>
<body>


	<?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('partials.session-status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
	
</body> 
</html><?php /**PATH C:\laragon\www\laravel\resources\views/layout.blade.php ENDPATH**/ ?>