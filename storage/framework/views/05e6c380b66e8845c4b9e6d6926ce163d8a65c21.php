<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<div class="row">
			<legend>Extra Mural Lecture</legend>
			<?php if(session('info')): ?>
				<div class="alert alert-dismissible alert-success">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo e(session('info')); ?>

				</div>
			<?php endif; ?>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Title</th>
			      <th scope="col">Description</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php if(count($articles) > 0): ?>
			  		<?php $__currentLoopData = $articles->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    <tr>
					      <th><?php echo e($article->id); ?></th>
					      <td><?php echo e($article->title); ?></td>
					      <td><?php echo e($article->description); ?></td>
					      <td>
					      	<a href='<?php echo e(url("/read/{$article->id}")); ?>' class="badge badge-primary">Read</a>
					      	<a href='<?php echo e(url("/update/{$article->id}")); ?>' class="badge badge-success">Update</a>
					      	<a href='<?php echo e(url("/delete/{$article->id}")); ?>' class="badge badge-danger">Delete</a>
					    </tr>
			  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  	<?php endif; ?>
			  </tbody>
			</table>
		</div>
	</div>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>