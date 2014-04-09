<?php

/**
 * Controller for all functions relating to the players. Displays the profile and accounts pages, and provides
 * functions for adding, updating and deleting accounts.
 *
 * @package PlayerController
 */
class PlayerController extends BaseController {

	/**
	 * Returns the built profile page
	 *
	 * @return View the view to be displayed
	 */
	public function showProfilePage() {
		$latestArticles = Article::orderBy('display_date', 'desc')
						->take(5)
						->get();

		return View::make('profile', array('articles' => $latestArticles));
	}

	/**
	 * Returns the built accounts page
	 *
	 * @return View the view to be displayed
	 */
	public function showAccountsPage() {
		$players = Player::get();

		return View::make('accounts', array('players' => $players));
	}

	/**
	 * Adds a new player to the database if it passes the validation checks. Returns redirect to accounts page
	 * with a success notification or the errors that occured.
	 *
	 * @return Return a redirect to the accounts page
	 */
	public function addNewPlayer() {
		$v = Player::validate(Input::all());

		if ($v->passes()) {
			$player = new Player;
			$player->first_name = Input::get('first_name');
			$player->last_name = Input::get('last_name');
			$player->email = Input::get('email');
			$player->password = Hash::make(Input::get('password'));
			$player->facebook_URL = Input::get('facebook_URL', NULL);
			$player->is_admin = Input::get('is_admin', 0);
			$player->save();

			return Redirect::action('PlayerController@showAccountsPage')->with('success', 'The new user has been added to the database!');
		} else {
			Input::flash();
			return Redirect::action('PlayerController@showAccountsPage')->withErrors($v->messages());
		}	
	}
}