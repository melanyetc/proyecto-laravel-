

<?php $__env->startSection('title', $project->title); ?>

<?php $__env->startSection('content'); ?>

<h1><?php echo e($project->title); ?></h1>

<?php if(auth()->guard()->check()): ?>
  <a href="<?php echo e(route('projects.edit', $project)); ?>">Editar</a>

  <form method="POST" action=" <?php echo e(route('projects.destroy', $project)); ?>"> 

	   <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
	   <button> Eliminar </button>

   </form>

 <?php endif; ?>
<p><?php echo e($project->description); ?></p>

<p><?php echo e($project->created_at->diffForHumans()); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/projects/show.blade.php ENDPATH**/ ?>