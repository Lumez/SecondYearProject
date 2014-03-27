<?php

View::composer('partials.sidebarpartial.weather', function($view) {
	$json = file_get_contents("http://api.worldweatheronline.com/free/v1/weather.ashx?q=Southampton&format=json&num_of_days=5&includelocation=yes&key=gxmb5txzq882x9w46ky6k8m5");

	$response = json_decode($json);

    $view->with('weather_array', $response->data->weather);
});
