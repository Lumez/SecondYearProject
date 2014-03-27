<br/>

<div style="border:solid 1px #BDC4D6;"> 

	
	<h4>
		<b>Weather forecast</b>
	</h4>

	@foreach($weather_array as $day)

		<?php 

			$date = strtotime($day->date);
			$myDate = date ('d-m-y', $date);

		?>
		

		<p>  {{ $myDate }} --> {{ $day->weatherDesc[0]->value }} </p>




	@endforeach

	Powered by <a href="http://www.worldweatheronline.com/" 
	title="Free local weather content provider" 
	target="_blank">World Weather Online</a>

	<br/>

</div>