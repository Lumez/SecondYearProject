<?php

/**
 * Controller for the home page. Displays the home page.
 *
 * @package HomeController
 */
class ContactController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showContactPage() {
		$Players = Player::get();


		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
		return View::make('contact', array('contacts' => $Players));
	}

}