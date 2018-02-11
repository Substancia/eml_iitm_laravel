<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<div class="row">
			<form class="form-horizontal" method="POST" action="">
				<fieldset>
					<legend>Blog upload</legend>
					<div class="form-group">
						<label for="inputEmail" class="control-label">Title</label>
						<input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="inputPassword" class="control-label">Description</label>
						<textarea class="form-control" placeholder="Description"></textarea>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>