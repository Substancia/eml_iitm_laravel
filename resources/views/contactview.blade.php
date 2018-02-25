@include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Inbox</legend>
			@if(session('info'))
				<div class="alert alert-dismissible alert-success">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
					{{ session('info') }}
				</div>
			@endif
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Subject</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($envelops) > 0)
			  		@foreach($envelops->all() as $envelop)
					    <tr>
					      <th>{{ $envelop->number }}</th>
					      <td>{{ $envelop->name }}</td>
					      <td>{{ $envelop->email }}</td>
					      <td>{{ $envelop->subject }}</td>
					      <td>
					      	<a href='{{ url("/contactread/{$envelop->id}") }}' class="badge badge-primary">Read</a>
					      	<a href='{{ url("/contactdelete/{$envelop->id}") }}' class="badge badge-danger">Delete</a>
					    </tr>
			  		@endforeach
			  	@endif
			  </tbody>
			</table>
		</div>
	</div>
@include('inc.footer')