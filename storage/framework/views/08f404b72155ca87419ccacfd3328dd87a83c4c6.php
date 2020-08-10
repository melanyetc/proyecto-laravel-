<?php echo csrf_field(); ?> 

<label>
		Título del proyecto <br>

	<input type="text" name="title" value="<?php echo e(old('title', $project->title)); ?>">
	
	</label>
	<br>
	<br>

	<label>
		URL del proyecto <br>

	<input type="text" name="url" value="<?php echo e(old('url', $project->url)); ?>" >

	</label>
	<br>
	<br>
	<label>
		Descripción del proyecto <br>

	<textarea name="description"  value="{{ old('description',$project->description)}"></textarea>

	</label>
	<br><?php /**PATH C:\laragon\www\laravel\resources\views/projects/_form.blade.php ENDPATH**/ ?>