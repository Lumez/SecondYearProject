<br/>
<div class="sidebarItem"> 
	<h4><b>Subscribe Now!</b></h4>
	{{ Form::open(array('action' => 'SubscribeController@addSubscriber')) }}

		{{ Form::label('email', 'Subscribe now to recieve the latest society updates!', array('class' => 'awesome')) }}

		{{ Form::text('email', 'example@gmail.com') }}

		{{ Form::submit('Subscribe!') }}

	{{ Form::close() }}
	<br/>
</div>