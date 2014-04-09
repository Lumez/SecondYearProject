@extends('layouts.base')

@section('title', 'Profile')

@section('head')

{{ HTML::style('css/home.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h1>Profile</h1>
			<p>Below are the settings for your player account and profile. Be careful, the fields marked with red asterisks are visible to the public!</p>

		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop