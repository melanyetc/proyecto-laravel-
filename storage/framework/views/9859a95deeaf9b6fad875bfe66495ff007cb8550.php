<nav>


	<ul>
		<li class="<?php echo e(setActive('home')); ?>"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>

		<li class="<?php echo e(setActive('about')); ?>"><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('About'); ?></a></li>

		<li class="<?php echo e(setActive('projects.index')); ?>"><a href="<?php echo e(route('projects.index')); ?>"><?php echo app('translator')->get('Projects'); ?></a></li>

		<li class="<?php echo e(setActive('contact')); ?>"><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>

		<?php if(auth()->guard()->guest()): ?>
		
		     <li> <a href="<?php echo e(route('login')); ?>">Login</a></li>
		     <?php else: ?>
		     <li><a href="#" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
              >Cerrar Sesión</a>
          </li>

		<?php endif; ?>
	</ul>
</nav>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
<?php echo csrf_field(); ?>
</form><?php /**PATH C:\laragon\www\laravel\resources\views/partials/nav.blade.php ENDPATH**/ ?>