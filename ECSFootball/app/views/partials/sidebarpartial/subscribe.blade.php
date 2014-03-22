
<div style="border-bottom:solid 1px #BDC4D6"> 
	
	<h3>
		Subscribe Now!
	</h3>

	{{ Form::open(array('action' => 'SubscribeController@addSubscriber')) }}


		{{ Form::label('email', 'Subscribe now to recieve the latest society updates!', array('class' => 'awesome')) }}

		 {{ Form::text('email', 'example@gmail.com') }}

		 {{ Form::submit('Subscribe!') }}

	{{ Form::close() }}

	<br/>

</div>