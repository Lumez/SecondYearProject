@extends('layouts.base')

@section('title', 'Contact Us')

@section('head')

{{ HTML::style('css/team.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8">
		<div class="col-md-12 center">
			<h1>Contact Us</h1>
			<p>If you have any query about the team, please fill in the form below:</p>
			<hr />
		</div>
			<form role="form">
			<div class="form-group">
			    <label for="InputEmail1">Your Full Name</label>
			    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="InputEmail2">Your Email address</label>
			    <input type="email" class="form-control" id="InputEmai2" placeholder="Enter E-mail">
			  </div>
			   <div class="form-group">
			   <label for="InputEmail3">Your Message</label>
			  <textarea class="form-control" id="InputEmail3" placeholder="Enter Message" rows="3"></textarea>
			   </div>
			 <button type="submit" class="btn btn-danger">Submit Message</button>
			 <button type="reset" class="btn btn-info">Clear</button>
			</form>
		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop