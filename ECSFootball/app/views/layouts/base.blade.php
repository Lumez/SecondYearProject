<!doctype html>
<html lang="en">
<head>
	{{ HTML::style('lib/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}

	{{ HTML::script('https://code.jquery.com/jquery.js') }}
	{{ HTML::script('lib/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('js/holder.js') }}

	<meta charset="UTF-8">
	<title>@yield('title') | ECSS Football</title>
</head>
<body>
	<div class="header-logo center">
		<img src="/img/RedCarpetFilms.png" style="width:600px;"/>
	</div>
	<div class="container">
		<div class="white-background">
			@include('layouts.nav')

			@yield('body')

			@include('layouts.footer')
		</div>
	</div>
</body>
</html>