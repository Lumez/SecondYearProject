@extends('layouts.base')

@section('title', 'Login')

@section('head')

{{ HTML::style('css/login.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>ECSS Player Login</h3>
			
			{{ Form::open(array('action' => 'LoginController@doLogin', 'class' => 'form-signin')) }}
				{{ Form::email('email', '', array('placeholder' => 'Email', 'class' => 'form-control')) }}
				{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
				{{ Form::submit('Login', array('class' => 'btn btn-success')) }}
			{{ Form::close() }}
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop