
<div style="">
	

	

	<h3>
		Subscribe Now!
	</h3>

	{{ Form::open(array('action' => 'SideController@addSubscriber')) }}


		{{ Form::label('email', 'Subscribe now to recieve the latest society updates!', array('class' => 'awesome')) }}

		 {{ Form::text('email', 'example@gmail.com') }}

		 {{ Form::submit('Subscribe!') }}

	{{ Form::close() }}


</div>