<?php

/**
 * Controller for the league table page. Displays the league table loaded from the inter mural sports page.
 *
 * @package LeagueController
 */
class LeagueController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showLeaguePage() {
		$latestArticles = Article::orderBy('display_date', 'desc')
						->take(5)
						->get();


		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
		return View::make('league', array('articles' => $latestArticles));
	}

}