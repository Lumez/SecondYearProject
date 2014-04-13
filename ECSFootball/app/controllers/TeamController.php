<?php

/**
 * Controller for the home page. Displays the home page.
 *
 * @package HomeController
 */
class TeamController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showTeamPage() {
		$Players = DB::table('player')->orderBy('number')->get(); //orders by player number


		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
		return View::make('team', array('players' => $Players));
	}

}