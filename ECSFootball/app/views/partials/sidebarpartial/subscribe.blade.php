<br/>
<div class="sidebarItem"> 
	<h4><strong>Subscribe Now!</strong></h4>
	{{ Form::open(array('action' => 'SubscribeController@addSubscriber')) }}

		{{ Form::label('eMail', 'Subscribe now to recieve the latest society updates!', array('class' => 'awesome')) }}

		{{ Form::text('eMail', '', array('placeholder' => 'Email Address')) }}

		{{ Form::submit('Subscribe!') }}

	{{ Form::close() }}
	<br/>
</div>