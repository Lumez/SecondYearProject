{{ HTML::style('css/weather.style.css') }}

<br/>
<div class="sidebarItem"> 
	<h4><b>Weather forecast</b></h4>
	
	<div style = "text-align:left; padding-left:15px;">

	<br/>	
	<hr/>

		@foreach($weather_array as $day)

			<?php 
				$date = strtotime($day->date);
				$myDate = date ('(D)d M ', $date);
			?>
			
			<p>  
				<b>{{ $myDate }}</b> --

				<!-- Weather Icon Image -->
				<img src= "{{ $day->weatherIconUrl[0]->value }}" alt= "{{ $day->weatherDesc[0]->value }}" id="weathericon"/>
				{{ $day->weatherDesc[0]->value }} 

			</p>

			<hr/>

		@endforeach
	</div>
	<br/>
	
	Powered by <a href="http://www.worldweatheronline.com/" 
	title="Free local weather content provider" 
	target="_blank">World Weather Online</a>
	<br/>
</div>