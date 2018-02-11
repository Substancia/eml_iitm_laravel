<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<div class="row">
			<legend>Read Article</legend>
			<br>
			<div class="col-md-7">
				<h3><?php echo e($articles->title); ?></h3>
				<p><?php echo e($articles->description); ?></p>
			</div>
			<div class="col-md-5">
				<?php if(strlen($file->name) > 0): ?>
				<img src="<?php echo e(asset('storage/images/'.$file->name)); ?>" width="100%" style="border: 1px solid grey;">
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>