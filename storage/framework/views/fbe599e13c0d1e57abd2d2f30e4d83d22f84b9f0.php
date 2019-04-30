<?php if(count($errors) >0): ?>
<div class="row form-group">
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 error">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</ul>
	</div>

</div>
<?php endif; ?>
<?php if(Session::has('message')): ?>
<div class="row">
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 success">
		
		<?php echo e(Session::get('message')); ?>

	</div>

</div>

<?php endif; ?>