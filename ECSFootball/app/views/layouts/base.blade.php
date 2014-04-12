<!doctype html>
<html lang="en">
<head>
	{{ HTML::style('lib/bootstrap/css/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/contact.style.css') }}
	{{ HTML::style('css/sidebar.style.css') }}
	{{ HTML::style('css/home.style.css') }}

	{{ HTML::script('https://code.jquery.com/jquery.js') }}
	{{ HTML::script('lib/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('js/holder.js') }}

	@yield('head')
	
	<link rel="shortcut icon" href="/img/favicon.ico"/>
	<meta charset="UTF-8">
	<title>@yield('title') | ECSS Football</title>
</head>
<body>
	<div class="container">
		<div class="header-logo">
			<img src="/img/ecss.png" style="width:150px;"/>
		</div>
		<div class="white-background">
			@include('layouts.nav')

			@include('partials.errorbox')

			@yield('body')

			@include('layouts.footer')
		</div>
	</div>
</body>
</html>