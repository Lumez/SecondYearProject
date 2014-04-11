<div class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="arrowLeft"></div><div class="arrowRight"></div>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navig" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="{{ action('HomeController@showHomePage') }}">Latest News</a></li>
				<li><a href="{{ action('TeamController@showTeamPage') }}">Team</a></li>
				<li><a href="{{ action('FixturesAndResultsController@showFixturesPage') }}">Fixtures &amp; Results</a></li>
				<li><a href="{{ action('LeagueController@showLeaguePage') }}">League Table</a></li>
				<li><a href="{{ action('ContactController@showContactPage') }}">Contact Us</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if ( Auth::check() )

				<li><a href="{{ action('PlayerController@showProfilePage') }}"><img class="nav-profile-img" src="https://graph.facebook.com/{{ Auth::user()->facebook_URL}}/picture"/>{{{ Auth::user()->first_name }}}</a></li>

				@if ( Auth::user()->is_admin )
					<li><a href="{{ action('PlayerController@showAccountsPage') }}">Accounts</a></li>
				@endif

				<li><a href="{{ action('LoginController@doLogout') }}">Logout</a></li>

				@else

				<li class="dropdown" id="menu1">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
						Login
						<b class="caret"></b>
					</a>
					<div class="dropdown-menu">
						{{ Form::open(array('action' => 'LoginController@doLogin', 'class' => 'nav-login')) }}
							{{ Form::email('email', '', array('placeholder' => 'Email', 'class' => 'form-control')) }}
							{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
							{{ Form::submit('Login', array('class' => 'btn btn-success')) }}
						{{ Form::close() }}
					</div>
				</li>

			   @endif
			</ul>	

			<script language="javascript">
			    $('.dropdown-toggle').dropdown();
			    $('.dropdown-menu').find('form').click(function (e) {
			        e.stopPropagation();
			      });
			</script>
		</div>

</div>