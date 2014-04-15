<br/>
<div class="sidebarItem"> 
	<h4><strong>Latest News</strong></h4>
	<!--DON'T DELETE THIS COMMENTED AREA, IT IS REQUIRED FOR THE FIXTURES RESULTS
	<!--{{ $latestNews = Article::orderBy('display_date', 'desc')->take(2)->get();}}-->
	
	
			@foreach ($latestNews as $article)
				<h5><strong>{{ $article->title }}</strong></h5>
				<a href="{{ action('HomeController@showArticlePage',  $article->article_id) }}"><img class="newsImage" src="{{ $article->picture_URL }}" width="90px;"></a>
				
				<!--Is used to cut the description to certain amount of characters, not to exceed the div-->
				<!--{{ $description = $article->description; }}
				{{ $description = substr($description,0,100).'...'; }}-->
				<p class="newsDesc">{{ $description }} <a href="{{ action('HomeController@showArticlePage',  $article->article_id) }}"> Read More...</a></p>
				<hr/>
			@endforeach
	<div class="center"><a href="{{ action('HomeController@showHomePage') }}"> View Latest News</a></div>
	<br/>
</div>