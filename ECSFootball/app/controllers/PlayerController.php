<?php

/**
 * Controller for all functions relating to the players. Displays the profile and accounts pages, and provides
 * functions for adding, updating and deleting accounts.
 *
 * @package PlayerController
 */
class PlayerController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showProfilePage() {
		$latestArticles = Article::orderBy('display_date', 'desc')
						->take(5)
						->get();

		return View::make('profile', array('articles' => $latestArticles));
	}

	public function showAccountsPage() {
		$latestArticles = Article::orderBy('display_date', 'desc')
						->take(5)
						->get();

		return View::make('accounts', array('articles' => $latestArticles));
	}
}