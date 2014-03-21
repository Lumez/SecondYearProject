@if ($errors->count() > 0)

<div class="alert alert-danger">
		<strong>Error!</strong> 
		<ul>
			@foreach($errors->all() as $error)
			
			<li>{{ $error }}</li>
			
			@endforeach
		</ul>
</div>

@endif

@if (Session::get('success'))

<div class="alert alert-success">
		<strong>Success!</strong> 
		<p>{{ Session::get('success') }}</p>
</div>

@endif