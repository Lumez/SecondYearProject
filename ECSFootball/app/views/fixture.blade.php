@extends('layouts.base')

@section('title', 'Fixtures and Results')

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>Fixture and Results</h3>
			

			@foreach ($fixtures as $fixture)
			<hr />
			<div class="fixture">
				<p>{{ $fixture->against_team }}
				{{ $fixture->date }}
				{{ $fixture->ecs_score }}</p>
			</div>
			@endforeach


			<img src="/img/RCF.png" style="width: 300px;">
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop