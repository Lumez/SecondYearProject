<div class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ action('HomeController@showHomePage') }}">Home</a></li>
				<li class="dropdown">
					<a href="{{ action('GenreController@showGenrePage')}}" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
					<ul class="dropdown-menu">
						@if (isset($genres))
							@foreach ($genres as $genre)
								<li><a href="{{ action('GenreController@showGenrePage', $genre->id) }}">{{ $genre->name }}</a></li>
							@endforeach
						@endif
					</ul>
				</li>
				<li><a href="{{ action('FilmController@showFilmPage') }}">Film List</a></li>
			</ul>
			<form action="{{ action('FilmController@searchFilm') }}" method="post" class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search Films" name="search">
				</div>
				<button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		    </form>
		</div>
	</div>
</div>