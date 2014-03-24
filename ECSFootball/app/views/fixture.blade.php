@extends('layouts.base')

@section('title', 'Fixtures and Results')

@section('head')

{{ HTML::style('css/fixtures.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>Fixture and Results</h3>
			
			
			@foreach ($fixtures as $fixture)
			<div class="row">
				<div class="col-md-3">
					{{ $fixture->date }}
				</div>
				<div class="col-md-5 fixture">
					@if ($fixture->is_home == 1)
						{{ $fixture->ecs_score }} |
						ECSS vs
						{{ $fixture->against_team }} |
						{{ $fixture->against_score }}
					@else 
						{{ $fixture->against_score }} |
						{{ $fixture->against_team }}
						vs ECSS |
						{{ $fixture->ecs_score }}
					@endif
				</div>
				<div class="col-md-3">
					<!-- Button trigger modal -->
					<button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
					  View Report
					</button>
					
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">
							<div class="fixtureTitle">
								{{ $fixture->date }}  : &nbsp;
								@if ($fixture->is_home == 1)
									{{ $fixture->ecs_score }} |
									ECSS vs
									{{ $fixture->against_team }} |
									{{ $fixture->against_score }}
								@else 
									{{ $fixture->against_score }} |
									{{ $fixture->against_team }}
									vs ECSS |
									{{ $fixture->ecs_score }}
								@endif
							</div>
						</h4>
					      </div>
					      <div class="modal-body">
						{{ $fixture->profile }}
						<hr/>
					      </div>
					      <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
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