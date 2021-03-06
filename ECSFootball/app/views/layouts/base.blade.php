<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	{{ HTML::style('lib/bootstrap/css/bootstrap.css') }}
	{{ HTML::style('lib/datepicker/css/datepicker.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/contact.style.css') }}
	{{ HTML::style('css/home.style.css') }}
	{{ HTML::style('css/sidebar.style.css') }}
	
	{{ HTML::script('https://code.jquery.com/jquery.js') }}
	{{ HTML::script('lib/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('lib/datepicker/js/bootstrap-datepicker.js') }}
	{{ HTML::script('js/holder.js') }}
	{{ HTML::script('js/ecss.js') }}

	@yield('head')
	
	<link rel="shortcut icon" href="/img/favicon.ico"/>
	
	<title>@yield('title') | ECSS Football</title>
</head>
<body>
	<div class="container">
		<div class="right">
            <a class="btn btn-danger accessibility" href="javascript:(function(){d=document;lf=d.createElement('script');lf.type='text/javascript';lf.id='ToolbarStarter';lf.text='var%20StudyBarNoSandbox=true';d.getElementsByTagName('head')[0].appendChild(lf);jf=d.createElement('script');jf.src='https://core.atbar.org/atbar/en/latest/atbar.min.js';jf.type='text/javascript';jf.id='ToolBar';d.getElementsByTagName('head')[0].appendChild(jf);})()" target="" title="" id="atbar">Accessibility Tools</a>
        </div>

		<div class="header-logo">
			<a href="{{ action('HomeController@showHomePage') }}"><img src="/img/ecss.png" <?php if (isset($fixture)){ echo "class='fix'";}?>alt="ECS-Football Society's Logo" style="width:150px;"/></a>
		</div>
		
		<div class="white-background">
			@include('layouts.nav')

			@include('partials.errorbox')

			@yield('body')

			@include('layouts.footer')
		</div>
	</div>
	<div id="toTopLeft"><span class="glyphicon glyphicon-arrow-up"></span></div>
</body>
</html>