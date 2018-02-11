<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
			<form class="form-horizontal" method="POST" action="<?php echo e(url('/insert')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<legend>Blog upload</legend>
				<?php if(count($errors) > 0): ?>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="alert alert-dismissible alert-danger">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <?php echo e($error); ?>

						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				<fieldset>
					<div class="form-group">
						<label for="inputEmail" class="control-label">Title</label>
						<input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title">
					</div>
				</fieldset>
				<fieldset>
					<div class="form-group">
						<label for="inputPassword" class="control-label">Description</label>
						<textarea name="description" class="form-control" placeholder="Description"></textarea>
					</div>
				</fieldset>
				<button type="submit" class="btn btn-primary" id="submit">Submit</button>
				<a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Back</a>
			</form>
	</div>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>