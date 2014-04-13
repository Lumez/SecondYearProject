@extends('layouts.base')

@section('title', 'Home')

@section('head')

{{ HTML::style('css/home.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8">
			<h3 class="center">Welcome to ECSS Football</h3>

			@foreach ($articles as $article)
			<hr />
			<div class="row">
				<div class="col-sm-12">
					<div class="article">
						<h3>{{ $article->title }}</h3>
						<img class="newsImage" src="{{ $article->picture_URL }}" width="200px;">
						<!--{{ $description = $article->description; }}
						{{ $description = substr($description,0,555).'...'; }}-->
						<p class="newsDesc">{{ $description }} <a href="{{ action('HomeController@showArticlesPage',  $article->article_id) }}"> Read More</a></p>
						<p><span class="glyphicon glyphicon-calendar"></span> {{ date('d F Y',strtotime($article->display_date)); }}</p>
					</div>
				</div>
			</div>
			@endforeach

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