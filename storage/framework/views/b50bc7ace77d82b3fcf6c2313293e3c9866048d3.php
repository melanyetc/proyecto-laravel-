<!DOCTYPE html>
 <htlm>

 <head>
 	<title>Mensaje recibido</title>

 </head>
 <body>
 	
<p>Recibiste un mensaje de: <?php echo e($msg['name']); ?> - <?php echo e($msg['email']); ?></p> 
<p><strong>Asunto:</strong> <?php echo e($msg['subject']); ?></p>



 </body>
</htlm>
 Contenido del email


<?php /**PATH C:\laragon\www\laravel\resources\views/emails/message-received.blade.php ENDPATH**/ ?>