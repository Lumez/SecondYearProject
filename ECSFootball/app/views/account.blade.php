@extends('layouts.base')

@section('title', $player->first_name." ".$player->last_name)

@section('head')

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>Update Player</h3>
			<div class="row">
				{{ Form::open(array('action' => 'PlayerController@updatePlayer', 'class' => 'form-horizontal')) }}
				{{ Form::hidden('id', $player->id) }}
				<div class="form-group">
					{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('first_name', $player->first_name, array('placeholder' => 'First Name', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('last_name', $player->last_name, array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('facebook_URL', 'Facebook Username', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('facebook_URL', $player->facebook_URL, array('placeholder' => 'Facebook Username', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('nationality', $player->nationality, array('placeholder' => 'Nationality', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('position', 'Position', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('position', $player->position, array('placeholder' => 'Position', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('number', 'Player Number', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('number', $player->number, array('placeholder' => 'Player Number', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('about_me', 'About Me', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::textarea('about_me', $player->about_me, array('placeholder' => '', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('is_admin', 'Admin', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						<div class="checkbox">
							@if ($player->is_admin)
								{{ Form::checkbox('is_admin', '1', true) }}
							@else
								{{ Form::checkbox('is_admin', '1') }}
							@endif
						</div>
					</div>
				</div>	
				<div class="right">								
					<a href="{{ action('PlayerController@showAccountsPage') }}" class="btn btn-default">Cancel</a>
					{{ Form::submit('Save Changes', array('class' => 'btn btn-success')) }}
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