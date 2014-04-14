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

			
			<div class="right">
				<button class="btn btn-success" data-toggle="modal" data-target="#articleModal">&plus; Add Article</button>
			</div>
			
			<hr />
			<!-- Modal -->
			<div class="modal fade" id="articleModal" tabindex="-1" role="dialog" aria-labelledby="newArticleModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="newFixtureModal">Add New Article</h4>
						</div>
						<div class="modal-body">
			       			{{ Form::open(array('action' => 'HomeController@addArticle', 'class' => 'form-horizontal')) }}
			       			<div class="form-group">
			       				{{ Form::label('title', 'Title:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('title', '', array('placeholder' => 'e.g. Championship Qualifications', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('display_date', 'Date to Display:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('display_date', '', array('placeholder' => 'yyyy-mm-dd', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('picture_URL', 'Picture URL:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::text('picture_URL', '', array('placeholder' => 'e.g. http://www...', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('description', 'Description:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
									{{ Form::textarea('description', '', array('placeholder' => 'Enter your text here...', 'class' => 'form-control')) }}
								</div>
							</div>
							<div class="form-group">
			       				{{ Form::label('pin', 'Priority:', array('class' => 'col-sm-4 control-label')) }}
			       				<div class="col-sm-8">
			       					<div class="checkbox">
										{{ Form::checkbox('pin', '1') }}
									</div>
								</div>
							</div>									
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> &nbsp;Save </button>
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
			
			
			
			@foreach ($articles as $article)
			<div class="row">
				<div class="col-sm-12">
					<div class="article">
						<div class="row">
							<div class="col-sm-6">
								<a href="{{ action('HomeController@showArticlePage', $article->article_id) }}"><span class="articleTitle">{{ $article->title }}</span></a>
							</div>
							<div class="col-sm-3">
							</div>
							<div class="col-sm-3 editDelete">
									<a href="{{ action('HomeController@showArticleUpdatePage',  $article->article_id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
									
									{{ Form::open(array('action' => 'HomeController@deleteArticle', 'style' => 'display: inline;')) }}
										{{ Form::hidden('article_id', $article->article_id) }}
										<button type="submit" class="btn btn-danger">
											<span class="glyphicon glyphicon-trash"></span>
										</button>
									{{ Form::close() }}
						
							</div>
						</div>
						<!--{{ $description = $article->description; }}
						{{ $description = substr($description,0,555).'...'; }}-->
						<a href="{{ action('HomeController@showArticlePage',  $article->article_id) }}"><img class="newsImage" src="{{ $article->picture_URL }}" width="200px;"></a>
						<p class="newsDesc">{{ $description }} <a href="{{ action('HomeController@showArticlePage',  $article->article_id) }}"> Read More</a></p>
						<p><span class="glyphicon glyphicon-calendar"></span> {{ date('d F Y',strtotime($article->display_date)); }}</p>
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