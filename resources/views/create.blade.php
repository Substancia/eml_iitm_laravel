@include('inc.header')
	<div class="container">
			<form class="form-horizontal" method="POST" action="{{ url('/insert') }}" enctype="multipart/form-data">
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
				<div class="col-md-6">
					<fieldset>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Title</label>
							<input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title" autofocus="">
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label for="inputPassword" class="control-label">Description</label>
							<textarea name="description" class="form-control" placeholder="Description"></textarea>
						</div>
					</fieldset>
					<button type="submit" class="btn btn-primary" id="submit">Submit</button>
					<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
				</div>
				<div class="col-md-6">
					<center><input type="file" name="file"></center>
				</div>
			</form>
		</div>
	</div>
@include('inc.footer')