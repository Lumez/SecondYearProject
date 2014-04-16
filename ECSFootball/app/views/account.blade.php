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
					{{ Form::label('nickname', 'Nickname', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('nickname', $player->nickname, array('class' => 'form-control')) }}
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
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> &nbsp;Save Changes</button>
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