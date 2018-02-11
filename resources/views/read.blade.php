@include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Read Article</legend>
			<br>
			<div class="col-md-7">
				<h3>{{ $articles->title }}</h3>
				<p>{{ $articles->description }}</p>
			</div>
			<div class="col-md-5">
				@if(strlen($file->name) > 0)
				<img src="{{ asset('storage/images/'.$file->name) }}" width="100%" style="border: 1px solid grey;">
				@endif
			</div>
		</div>
	</div>
@include('inc.footer')