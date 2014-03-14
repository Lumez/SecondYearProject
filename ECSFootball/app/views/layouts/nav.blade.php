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
				<li><a href="{{ action('HomeController@showHomePage') }}">Latest News</a></li>
				<li><a href="{{ action('HomeController@showHomePage') }}">Team</a></li>
				<li><a href="{{ action('HomeController@showHomePage') }}">Fixtures &amp; Results</a></li>
				<li><a href="{{ action('HomeController@showHomePage') }}">League Table</a></li>
				<li><a href="{{ action('HomeController@showHomePage') }}">Contact Us</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown" id="menu1">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
						Login
						<b class="caret"></b>
					</a>
					<div class="dropdown-menu">
						<form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post">
							<div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" />
								<input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" />
							</div>
							<fieldset class='textbox' style="padding:10px">
								<input style="margin-top: 8px" type="text" placeholder="Username" />
								<input style="margin-top: 8px" type="password" placeholder="Passsword" />
								<input class="btn-primary" name="commit" type="submit" value="Log In" />
							</fieldset>
						</form>
					</div>
			   </li>
			</ul>
			<script language="javascript">
			    $('.dropdown-toggle').dropdown();
			    $('.dropdown-menu').find('form').click(function (e) {
			        e.stopPropagation();
			      });
			</script>
		</div>
	</div>
</div>