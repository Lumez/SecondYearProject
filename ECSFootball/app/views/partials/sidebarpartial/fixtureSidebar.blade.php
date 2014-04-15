<br/>
<div class="sidebarItem"> 
	<h4><b>Latest Fixtures and Results</b></h4>
	<!-- DON'T DELETE THIS COMMENTED AREA, IT IS REQUIRED FOR THE FIXTURES RESULTS
	<!-- {{ $latestFixtures = Fixture::orderBy('date', 'desc')->take(5)->get();}} -->
	
	<div class="center">
		<table class="sidebarFixture">
			@foreach ($latestFixtures as $fixture)
				<tr>
					@if ($fixture->is_home == 1)
						<td>{{ $fixture->ecs_score }} |</td>
						<td>ECSS</td>
						<td>vs</td>
						<td>{{ $fixture->against_team }}</td>
						<td>| {{ $fixture->against_score }}</td>
					@else
						<td>{{ $fixture->against_score }} |</td>
						<td>{{ $fixture->against_team }}</td>
						<td>vs</td>
						<td>ECSS</td>
						<td>| {{ $fixture->ecs_score }}</td>
					@endif
				</tr>
			@endforeach
		</table>
	</div><br/>
	<div class="center"><a href="{{ action('FixturesAndResultsController@showFixturesPage') }}"> View Latest Fixtures and Results</a></div>
	<br/>
</div>