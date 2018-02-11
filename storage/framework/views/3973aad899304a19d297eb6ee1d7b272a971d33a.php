<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<div class="row">
			<legend>Extra Mural Lecture</legend>
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
					    <tr class="table-active">
					      <th><?php echo e($article->id); ?></th>
					      <td><?php echo e($article->title); ?></td>
					      <td><?php echo e($article->description); ?></td>
					      <td>
					      	<a href="<?php echo e(url('')); ?>" class="badge badge-primary">Read</a>
					      	<a href="<?php echo e(url('')); ?>" class="badge badge-success">Update</a>
					      	<a href="<?php echo e(url('')); ?>" class="badge badge-danger">Delete</a>
					    </tr>
			  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  	<?php endif; ?>
			  </tbody>
			</table>
		</div>
	</div>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>