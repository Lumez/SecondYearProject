<?php

/**
 * Controller for the sidebar. Displays in all page.
 *
 * @package HomeController
 */
class WeatherController extends BaseController {

	/** !!!!!!!!!!!!!change this !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<--- change this
	 * Check if there is an existing email address in the database.
	 * Add subscriber into the databse if this is a new email address.
	 *
	 * @return View the view to be displayed
	 */
	public function getWeather() {
		
		$json = file_get_contents("http://api.worldweatheronline.com/free/v1/tz.ashx?key=gxmb5txzq882x9w46ky6k8m5&q=98115&format=json");

		$data = $data_decode($json);

		return $data;


	}

	public function getLocationSearch(){

	}

}