@extends('layouts.base')

@section('title', 'Update Article')

@section('head')

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8 center">
			<h3>Update Article</h3>
			<div class="row">
				{{ Form::open(array('action' => 'HomeController@updateArticle', 'class' => 'form-horizontal')) }}
				{{ Form::hidden('article_id', $article->article_id) }}
				<div class="form-group">
					{{ Form::label('title', 'Article Title:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('title', $article->title, array('placeholder' => 'e.g. Football', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('display_date', 'Display Date:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('display_date', $article->display_date, array('placeholder' => 'yyyy-mm-dd', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('picture_URL', 'Picture URL:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('picture_URL', $article->picture_URL, array('placeholder' => 'http://...', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('description', 'Description:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						{{ Form::text('description', $article->description, array('placeholder' => 'Enter your text here...', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('pin', 'Priority:', array('class' => 'col-sm-4 control-label')) }}
					<div class="col-sm-8">
						<div class="checkbox">
							@if ($article->pin)
								{{ Form::checkbox('pin', '1', true) }}
							@else
								{{ Form::checkbox('pin', '1') }}
							@endif
						</div>
					</div>
				</div>	
				<div class="right">								
					<a href="{{ action('HomeController@showHomePage') }}" class="btn btn-default">Cancel</a>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> &nbsp;Save Changes</button>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop