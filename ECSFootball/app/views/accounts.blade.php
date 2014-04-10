@extends('layouts.base')

@section('title', 'Accounts')

@section('head')

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h1>Accounts</h1>

			<table class="table table-hover table-condensed">
				<tr>
					<th>ID</th>
					<th></th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
				</tr>
				@foreach ($players as $player)
				<tr onclick="location.href='{{ action('PlayerController@showAccountsPage', $player->id) }}'" style="cursor: pointer;">					
					<td>{{ $player->id }}</td>
					<td><img src='https://graph.facebook.com/{{ $player->facebook_URL }}/picture'/></td>
					<td>{{ $player->first_name }}</td>
					<td>{{ $player->last_name }}</td>
					<td>{{ $player->email }}</td>
				</tr>
				@endforeach
			</table>
			<hr />
			
			<div class="right">
				<button class="btn btn-success" data-toggle="modal" data-target="#playerModal">&plus; Add Player</button>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="playerModal" tabindex="-1" role="dialog" aria-labelledby="newPlayerModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="newPlayerModal">Add New Player</h4>
						</div>
						<div class="modal-body">
			       			{{ Form::open(array('action' => 'PlayerController@addPlayer', 'class' => 'form-horizontal')) }}
			       			<div class="form-group">
			       				{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('first_name', '', array('placeholder' => 'First Name', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('last_name', '', array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('email', 'Email', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('email', '', array('placeholder' => 'Email Address', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('password', '', array('placeholder' => 'Password', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('facebook_URL', 'Facebook Username', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('facebook_URL', '', array('placeholder' => 'Facebook Username', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('is_admin', 'Admin', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
			       					<div class="checkbox">
										{{ Form::checkbox('is_admin', '1') }}
									</div>
								</div>
							</div>									
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							{{ Form::submit('Save', array('class' => 'btn btn-success')) }}
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop