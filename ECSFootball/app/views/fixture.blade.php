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
					
						<div class="left">{{ $fixture->ecs_score }} |</div> 
						<div class="center">ECSS vs {{ $fixture->against_team }}</div> 
						<div class="right">| {{ $fixture->against_score }}</div>
					@else 
						<div class="left">{{ $fixture->against_score }} |</div>
						<div class="center">{{ $fixture->against_team }} vs ECSS </div>
						<div class="right">| {{ $fixture->ecs_score }}</div>
					@endif
				</div>
				<div class="col-md-3">
					<!-- Button trigger modal -->
					<button class="" data-toggle="modal" data-target="#fixtureModal{{ $fixture->fixture_id }}">
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
				</div>
				<div class="col-md-3">
					
					<!--<a href="{{ action('FixturesAndResultsController@deleteFixture($fixture->fixture_id)') }}"><img id="deleteButton" src="/img/delete.png" width="20px"/></a>-->
				</div>				
			</div>
			@endforeach

			<hr />
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