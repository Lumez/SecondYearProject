@extends('layouts.base')

@section('title', 'Team')

@section('head')

{{ HTML::style('css/team.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h1>The Team</h1>
			<p><b>Kit Colours:</b> Navy & Yellow</p>
			<p>Customers experience a service that is second to none, with tracked next day delivery and no late fees, it's no wonder that we were voted top DVD rental provider in the UK for the past 10 years.</p>
			<strong>Red Carpet Films - DVD heaven really is a place on Earth</strong>
			
			@foreach ($players as $player)
			<hr />
			<div class="row">
			<img class="img-thumbnail pull-left"  src='https://graph.facebook.com/{{ $player->facebook_URL }}/picture?type=large'/>
				<h3>{{ $player->first_name }} {{ $player->last_name }}</h3>
				<br>
				<p>{{ $player->about_me }}</p>
			</div>
			@endforeach
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop