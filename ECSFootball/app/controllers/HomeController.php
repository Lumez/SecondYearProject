<?php

/**
 * Controller for the home page. Displays the home page.
 *
 * @package HomeController
 */
class HomeController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showHomePage() {
		$latestArticles = Article::orderBy('display_date', 'desc')
						->take(5)
						->get();


		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
		return View::make('home', array('articles' => $latestArticles));
	}

}