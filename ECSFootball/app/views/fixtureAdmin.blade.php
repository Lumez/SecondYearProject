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
			
			
			<table class="table table-hover table-condensed fixtureTable">
				<tr>
					<th>Date</th>
					<th>Score</th>
					<th>Home Team</th>
					<th></th>
					<th>Quest Team</th>
					<th>Score</th>
					<th>Match Profile</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			
			@foreach ($fixtures as $fixture)
	
						<tr onclick="location.href='{{ action('FixturesAndResultsController@showFixturesPage', $fixture->fixture_id) }}'" style="cursor: pointer;">					
							@if ($fixture->is_home == 1)
								<td>{{ $fixture->date }}</td>
								<td>{{ $fixture->ecs_score }}</td>
								<td>ECSS</td>
								<td>vs</td>
								<td>{{ $fixture->against_team }}</td>
								<td>{{ $fixture->against_score }}</td>
							@else
								<td>{{ $fixture->date }}</td>
								<td>{{ $fixture->against_score }}</td>
								<td>{{ $fixture->against_team }}</td>
								<td>vs</td>
								<td>ECSS</td>
								<td>{{ $fixture->ecs_score }}</td>
							@endif
								<td>
									<!-- Button trigger modal -->
									<button class="btn btn-default" data-toggle="modal" data-target="#fixtureModal{{ $fixture->fixture_id }}">
									  View Report
									</button>
									
									<!-- Modal -->
									<div class="modal fade" id="fixtureModal{{ $fixture->fixture_id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{ $fixture->fixture_id }}" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="modalLabel{{ $fixture->fixture_id }}">
											<div class="fixtureTitle">
												{{ $fixture->date }}  : &nbsp;
												@if ($fixture->is_home)
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
								</td>
								<td>
									{{ Form::open(array('action' => 'FixturesAndResultsController@deleteFixture')) }}
										{{ Form::hidden('id', '$fixture->fixture_id') }}
										{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
									{{ Form::close() }}
								</td>
								<td>
									{{ Form::open(array('action' => 'FixturesAndResultsController@delete_destroy', 'method'=>'DELETE'), array('style'=>'display: inline;')) }}
										{{ Form::hidden('id', $fixture->fixture_id) }}
										{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
									{{ Form::close() }}
								</td>
						</tr>
						
			@endforeach
			</table>
			
			<div class="right">
				<button class="btn btn-success" data-toggle="modal" data-target="#fixtureModal">&plus; Add Fixture</button><br/><br/>
			</div>
			<hr/>
			<!-- Modal -->
			<div class="modal fade" id="fixtureModal" tabindex="-1" role="dialog" aria-labelledby="newFixtureModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="newFixtureModal">Add New Fixture</h4>
						</div>
						<div class="modal-body">
			       			{{ Form::open(array('action' => 'FixturesAndResultsController@addFixture')) }}
			       			<div class="form-group">
			       				{{ Form::label('against_team', 'Against Team:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('against_team', '', array('placeholder' => 'e.g. Rocks', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('date', 'Date of Match:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('date', '', array('placeholder' => 'yyyy-mm-dd', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('ecs_score', 'ECSS Score:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('ecs_score', '', array('placeholder' => '0', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('against_score', 'Against Team Score:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('against_score', '', array('placeholder' => '0', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('is_home', 'Home Match:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
			       					<div class="checkbox">
										{{ Form::checkbox('is_home', '1') }}
									</div>
								</div>
							</div>	
							<div class="form-group">
			       				{{ Form::label('profile', 'Match Profile:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::textarea('profile', '', array('placeholder' => 'Enter your comments here...', 'class' => 'form-control')) }}
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
			
			
			
			
			<div id="disqus_thread"></div>
			<script type="text/javascript">
				/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				var disqus_shortname = 'bdixoncouk'; // required: replace example with your forum shortname

				/* * * DON'T EDIT BELOW THIS LINE * * */
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop