@extends('layouts.base')

@section('title', 'Update Fixture')

@section('head')

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>Update Fixture</h3>
			<div class="row">
				{{ Form::open(array('action' => 'FixturesAndResultsController@updateFixture', 'class' => 'form-horizontal')) }}
				{{ Form::hidden('fixture_id', $fixture->fixture_id) }}
				<div class="form-group">
					{{ Form::label('against_team', 'Against Team:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('against_team', $fixture->against_team, array('placeholder' => 'e.g. Rocks', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('date', 'Date:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('date', $fixture->date, array('placeholder' => 'yyyy-mm-dd', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('ecs_score', 'ECSS Score:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('ecs_score', $fixture->ecs_score, array('placeholder' => '0', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('against_score', 'Against Score:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('against_score', $fixture->against_score, array('placeholder' => '0', 'class' => 'form-control')) }}
					</div>
				</div>
                                <div class="form-group">
					{{ Form::label('profile', 'Match Profile:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::textarea('profile', $fixture->profile, array('placeholder' => 'Enter your comments here...', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('is_home', 'Home Match?:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						<div class="checkbox">
							@if ($fixture->is_home)
								{{ Form::checkbox('is_home', '1', true) }}
							@else
								{{ Form::checkbox('is_home', '1') }}
							@endif
						</div>
					</div>
				</div>	
				<div class="right">								
					<a href="{{ action('FixturesAndResultsController@showFixturesPage') }}" class="btn btn-default">Cancel</a>
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