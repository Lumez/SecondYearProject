<?php

/**
 * Base controller that all the other controllers extend. Provides the method for
 * building a page.
 *
 * @package BaseController
 */
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * Builds the page, adding the list of genres to the data
	 * array so that the nav functions properly.
	 *
	 * @param string the blade template to be used
	 * @param array the array of data to be included
	 *
	 * @return View the built view
	 */
	protected function buildPage($bladeTemplate, $dataArray) {
		//$genres = Genre::all();

		//$dataArray = array_add($dataArray, 'genres', $genres);

		return View::make($bladeTemplate, $dataArray);
	}

}