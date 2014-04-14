@extends('layouts.base')

@section('title', 'Profile')

@section('head')

{{ HTML::style('css/profile.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h1>Profile</h1>
			<p>Below are the settings for your player account and profile. Be careful, all the information provided is visible to the public!</p>
			<div class="row profile-padding">
				<div class="col-md-4 right">
					<img src="https://graph.facebook.com/{{ $player->facebook_URL }}/picture?type=large" class="img-thumbnail profile-picture" />
				</div>
				<div class="col-md-8 left">
					<h3>{{ $player->first_name }} {{ $player->last_name }}</h3>
				</div>
			</div>
			<div class="row">
				{{ Form::open(array('action' => 'PlayerController@updateProfile', 'class' => 'form-horizontal')) }}
				{{ Form::hidden('id', $player->id) }}
				<div class="form-group">
					{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('first_name', $player->first_name, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('last_name', $player->last_name, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('facebook_URL', 'Facebook Username', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('facebook_URL', $player->facebook_URL, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('nationality', $player->nationality, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('position', 'Position', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('position', $player->position, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('number', 'Player Number', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('number', $player->number, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('about_me', 'About Me', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::textarea('about_me', $player->about_me, array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="right">								
					{{ Form::submit('Save Changes', array('class' => 'btn btn-success')) }}
					{{ Form::close() }}
				</div>
			</div>
			<div class="row profile-padding">
				<h3>Change Password</h3>
			</div>
			<div class="row">
				{{ Form::open(array('action' => 'PlayerController@changePassword', 'class' => 'form-horizontal')) }}
				{{ Form::hidden('id', $player->id) }}
				<div class="form-group">
					{{ Form::label('old_password', 'Old Password', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::password('old_password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('new_password', 'New Password', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::password('new_password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('confirm_password', 'Confirm Password', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::password('confirm_password', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="right">								
					{{ Form::submit('Change Password', array('class' => 'btn btn-success')) }}
					{{ Form::close() }}
				</div>

			</div>
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop