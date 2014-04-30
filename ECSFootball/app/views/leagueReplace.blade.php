@extends('layouts.base')

@section('title', 'League Table')

@section('head')

{{ HTML::style('css/league.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8">
			<h1 class="center">League Table</h1>

			<p><strong>Warning</strong> - <em>Due to the shutdown of Soton Intermural Sports website, this feature is no longer available.
			Below is a screenshot of how it looked previously</em></p>

			<img src="/img/results.png" alt="ECSS Football Results" /><br/>

			<p class="copyright">All information for the league table is retrieved from <a href="http://soton.imsports.co.uk/" target="_blank">http://soton.imsports.co.uk/</a> website using Ajax.</p>
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