{{ HTML::style('css/weather.style.css') }}

<br/>
<div class="sidebarItem"> 
	<h4><strong>Weather forecast</strong></h4>
	
	<div style = "text-align:left; padding-left:15px;">
	
		<hr/>
		<table class="weathertable">

			@foreach($weather_array as $day)

				<?php 
					$date = strtotime($day->date);
					$myDate = date ('(D)d M', $date);
				?>

				<tr>	
					<td >  
						&nbsp;<strong>{{ $myDate }}</strong>
					</td>

					<td>
						<!-- Weather Icon Image -->
						~ <img src= "{{ $day->weatherIconUrl[0]->value }}" alt= "{{ $day->weatherDesc[0]->value }}" class="weathericon"/>
						{{ $day->weatherDesc[0]->value }} &nbsp;
					</td>

				</tr>
			@endforeach

		</table>

	</div>
	<br/>
	
	Powered by <a href="http://www.worldweatheronline.com/" 
	title="Free local weather content provider" 
	target="_blank">World Weather Online</a>
	<br/>
</div>