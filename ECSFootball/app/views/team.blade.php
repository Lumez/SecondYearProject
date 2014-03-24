@extends('layouts.base')

@section('title', 'Team')

@section('head')

{{ HTML::style('css/team.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>Welcome to ECSS Football</h3>
			<p>Here at Red Carpet Films we are dedicated to providing the best movies at exceptional prices. With thousands of titles to choose from, you will never be stuck for a movie to watch.</p>
			<p>Customers experience a service that is second to none, with tracked next day delivery and no late fees, it's no wonder that we were voted top DVD rental provider in the UK for the past 10 years.</p>
			<strong>Red Carpet Films - DVD heaven really is a place on Earth</strong>

		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop