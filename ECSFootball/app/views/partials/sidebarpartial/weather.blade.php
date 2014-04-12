<br/>
<div class="sidebarItem"> 
	<h4><b>Weather forecast</b></h4>
	
	<div style = "text-align:left; padding-left:15px;">
		@foreach($weather_array as $day)

			<?php 
				$date = strtotime($day->date);
				$myDate = date ('d-m-y', $date);
			?>
			
			<p>  <b>{{ $myDate }} </b> --> {{ $day->weatherDesc[0]->value }} </p>

		@endforeach
	</div>
	
	Powered by <a href="http://www.worldweatheronline.com/" 
	title="Free local weather content provider" 
	target="_blank">World Weather Online</a>
	<br/>
</div>