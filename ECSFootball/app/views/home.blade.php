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
			<hr />

			@foreach ($articles as $article)
			<div class="row">
				<div class="col-sm-12">
					@if ($article->pin)
					<div class="article pinned-post">
					@else
					<div class="article">
					@endif
						<a href="{{ action('HomeController@showArticlePage', $article->article_id) }}"><h3>{{ $article->title }}</h3></a>
						<img class="newsImage" src="{{ $article->picture_URL }}" width="200px;">
						<!--{{ $description = $article->description; }}
						{{ $description = substr($description,0,555).'...'; }}-->
						<p class="newsDesc">{{ $description }} <a href="{{ action('HomeController@showArticlePage',  $article->article_id) }}"> Read More</a></p>
						<p>
							<span class="glyphicon glyphicon-calendar"></span> {{ date('d F Y',strtotime($article->display_date)); }}
							@if ($article->pin)
							- Pinned
							@endif
						</p>
					</div>
				</div>
			</div>
			<hr />
			@endforeach

			<div class="center">
				{{ $articles->links() }}
			</div>

		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop