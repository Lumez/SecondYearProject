@extends('layouts.base')

@section('title', 'Contact Us')

@section('head')

{{ HTML::style('css/team.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<h3>Contact Us</h3>
				<p>If you have any query about the team, please fill in the form below:</p>
				<hr />
				{{ Form::open(array('action' => 'ContactController@getContactUsForm', 'class' => 'form-horizontal')) }}
					<div class="form-group">
						{{ Form::label('firstname', 'Firstname:', array('class' => 'col-sm-4 control-label')) }}
						<div class="col-sm-8">
							{{ Form::text('firstname', '', array('placeholder' => 'e.g. Ben', 'class' => 'form-control')) }}
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('surname', 'Surname:', array('class' => 'col-sm-4 control-label')) }}
						<div class="col-sm-8">
							{{ Form::text('surname', '', array('placeholder' => 'e.g. Dixon', 'class' => 'form-control')) }}
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('email', 'E-mail:', array('class' => 'col-sm-4 control-label')) }}
						<div class="col-sm-8">
							{{ Form::text('email', '', array('placeholder' => 'e.g. example@mail.com', 'class' => 'form-control')) }}
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('subject', 'Subject:', array('class' => 'col-sm-4 control-label')) }}
						<div class="col-sm-8">
							{{ Form::text('subject', '', array('placeholder' => 'e.g. Join the Team', 'class' => 'form-control')) }}
						</div>
					</div>	
					<div class="form-group">
						{{ Form::label('message', 'Message:', array('class' => 'col-sm-4 control-label')) }}
						<div class="col-sm-8">
							{{ Form::textarea('message', '', array('placeholder' => 'Enter your message here...', 'class' => 'form-control')) }}
						</div>
					</div>
					<div class="right">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> &nbsp;Submit </button>
					</div>
				{{ Form::close() }}
			</div><br/>
			
			<div class="row">
				<div class="col-md-6">
					<h3>Contact Details</h3>
					<div class="details">
						<table class="contactDetails" cellspacing="10px" cellpadding="5">
							<tr>
								<td><b>Telephone:</b></td>
								<td>+44XX XXXX XXXX</td>
							</tr>
							<tr>
								<td><b>Fax:</b></td>
								<td>+44XX XXXX XXXX</td>
							</tr>
							<tr>
								<td><b>Email:</b></td>
								<td>example@mail.com</td>
							</tr>
							<tr valign="top">
								<td><b>Address:</b></td>
								<td >316, London Road, Somewhere in London,<br/> which is somewhere in UK, with some postcode</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Our Location</h3>
					<div class="details">
						<iframe width="258" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=so17+1bj&amp;aq=&amp;sll=50.934795,-1.397195&amp;sspn=0.008235,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D1%83%D1%82%D0%B3%D0%B5%D0%BC%D0%BF%D1%82%D0%BE%D0%BD+SO17+1BJ,+%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%BE%D0%B1%D1%80%D0%B8%D1%82%D0%B0%D0%BD%D0%B8%D1%8F&amp;ll=50.934795,-1.397195&amp;spn=0.004118,0.010568&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;q=so17+1bj&amp;aq=&amp;sll=50.934795,-1.397195&amp;sspn=0.008235,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D1%83%D1%82%D0%B3%D0%B5%D0%BC%D0%BF%D1%82%D0%BE%D0%BD+SO17+1BJ,+%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%BE%D0%B1%D1%80%D0%B8%D1%82%D0%B0%D0%BD%D0%B8%D1%8F&amp;ll=50.934795,-1.397195&amp;spn=0.004118,0.010568&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop


			<!--<div class="col-md-12 center">
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
			</div>-->