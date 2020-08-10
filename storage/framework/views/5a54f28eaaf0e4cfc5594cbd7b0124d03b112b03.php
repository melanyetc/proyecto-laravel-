Contact


<?php $__env->startSection('title', 'Contacto'); ?>

<?php $__env->startSection('content'); ?>
   <h1>Contacto</h1>

  

    <form method="POST" action="<?php echo e(route('messages.store')); ?>"> 

        <?php echo e(csrf_field()); ?>

        <input name="name" placeholder="Nombre..." value="<?php echo e(old('name')); ?>"><br>
        <?php echo $errors->first('name', '<small>:message</small>'); ?> <br>

        <input type="text" name="email" placeholder="Email..." value="<?php echo e(old('email')); ?>"><br>
        <?php echo $errors->first('email', '<small>:message</small<br>'); ?><br>

        <input name="subject" placeholder="Asunto..." value="<?php echo e(old('subject')); ?>"><br>
        <?php echo $errors->first('subject', '<small>:message</small>'); ?> 
        <br>

        <textarea name="content" placeholder="Mensaje..." value="<?php echo e(old('content')); ?>"> </textarea><br>
        <button>Enviar</button>


   </form>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/contact.blade.php ENDPATH**/ ?>