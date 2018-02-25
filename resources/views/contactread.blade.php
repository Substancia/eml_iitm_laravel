@include('inc.header')
	<div class="container">
		<legend>Read Message</legend>
		<br>
		<p><b>Name: </b>{{ $envelop->name }}</p>
		<p><b>Email: </b>{{ $envelop->email }}</p>
		<p><b>Subject: </b>{{ $envelop->subject }}</p>
		<p><b>Message: </b><br>{{ $envelop->message }}</p>
	</div>
@include('inc.footer')