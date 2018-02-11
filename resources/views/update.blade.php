@include('inc.header')
	<div class="container">
		<form class="form-horizontal" method="POST" action="{{ url('/edit', array($articles->id)) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<legend>Blog upload</legend>
			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-dismissible alert-danger">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  {{ $error }}
					</div>
				@endforeach
			@endif
			<div class="row">
				<div class="col-md-7">
					<fieldset>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Title</label>
							<input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title" value="<?php echo $articles->title; ?>">
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label for="inputPassword" class="control-label">Description</label>
							<textarea name="description" class="form-control" placeholder="Description"><?php echo $articles->description; ?></textarea>
						</div>
					</fieldset>
					<button type="submit" class="btn btn-primary" id="submit">Update</button>
					<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
				</div>
				<div class="col-md-5">
					@if(strlen($file->name) > 0)
					<img src="{{ asset('storage/images/'.$file->name) }}" width="100%" style="border: 1px solid grey;">
					@endif
<!-- 						Image update option -->
<!-- 					<center><input type="file" name="file"></center> -->
				</div>
			</div>
		</form>
	</div>
@include('inc.footer')