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
			<p><b>Kit Colours:</b> Navy &amp; Yellow</p>
			<p>Customers experience a service that is second to none, with tracked next day delivery and no late fees, it's no wonder that we were voted top DVD rental provider in the UK for the past 10 years.</p>
			<h2 align="left">The Players</h2>
			<p>Here is a quick introduction to the players in the team:</p>
			@foreach ($players as $player)
			<div class="row">
			<hr />
			<h2 id="playername">
				{{ $player->first_name }} 
				@if ($player->nickname)
				'{{ $player->nickname }}'
				@endif 
				{{ $player->last_name }}
			</h2>
			<div class="pull-left">
			<a href="https://www.facebook.com/{{ $player->facebook_URL }}"><img class="img-thumbnail playerimage"  src='https://graph.facebook.com/{{ $player->facebook_URL }}/picture?type=large'/></a>
			</div>
			<div id="playerdetails">
			<br />
			<table id="playertable">
				<tr><td><h4>Number:</h4></td> <td class="dbinfo">{{ $player->number }}</td></tr>
				<tr><td><h4>Position:</h4></td> <td class="dbinfo">{{ $player->position }}</td></tr>
				<tr><td><h4>Nationality:</h4></td> <td class="dbinfo">{{ $player->nationality }}</td></tr>
				<tr><td><h4>About Me:</h4></td> <td class="dbinfo">{{ $player->about_me }}</td></tr>
			
			</table>
			</div>
			</div>
			@endforeach
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop