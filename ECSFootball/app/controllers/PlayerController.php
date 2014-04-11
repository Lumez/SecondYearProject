<?php

/**
 * Controller for all functions relating to the players. Displays the profile and accounts pages, and provides
 * functions for adding, updating and deleting accounts.
 *
 * @package PlayerController
 */
class PlayerController extends BaseController {

	/**
	 * Returns the built profile view
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
	 * Returns an accounts page to be displayed. The page displayed depends on the
	 * playerId provided.
	 *
	 * @param string the player id
	 *
	 * @return View the view to be displayed
	 */
	public function showAccountsPage($playerId = null) {
		if (!$playerId == null) {
			return $this->showAccount($playerId);
		} else {
			return $this->showAccountsList();
		}
	}

	/**
	 * Returns page with a list of all the accounts.
	 *
	 * @return View the view to be displayed
	 */
	public function showAccountsList() {
		$players = Player::get();

		return View::make('accounts', array('players' => $players));
	}


	/**
	 * Returns the account page with the specified id
	 *
	 * @return View the view to be displayed
	 */
	public function showAccount($playerId) {
		$player = Player::where('id', '=', $playerId)
					->first();

		return View::make('account', array('player' => $player));
	}

	/**
	 * Adds a new player to the database if it passes the validation checks. Returns redirect to accounts page
	 * with a success notification or the errors that occured.
	 *
	 * @return Return a redirect to the accounts page
	 */
	public function addPlayer() {
		$v = Player::validate(Input::all(), 'adminNew');

		if ($v->passes()) {
			$player = new Player;
			$player->first_name = Input::get('first_name');
			$player->last_name = Input::get('last_name');
			$player->email = Input::get('email');
			$player->password = Hash::make(Input::get('password'));
			$player->facebook_URL = Input::get('facebook_URL', NULL);
			$player->is_admin = Input::get('is_admin', 0);
			$player->save();

			return Redirect::action('PlayerController@showAccountsPage')->with('success', 'The player has been added.');
		} else {
			Input::flash();
			return Redirect::action('PlayerController@showAccountsPage')->withErrors($v->messages());
		}	
	}

	/**
	 * Updates the data for player if it passes the validation checks. Returns redirect to accounts page
	 * with a success notification or the errors that occured.
	 *
	 * @return Return a redirect to the accounts page
	 */
	public function updatePlayer() {
		$v = Player::validate(Input::all(), 'adminUpdate');

		if ($v->passes()) {
			$player = Player::find(Input::get('id'));
			$player->first_name = Input::get('first_name');
			$player->last_name = Input::get('last_name');
			$player->is_admin = Input::get('is_admin', 0);
			$player->about_me = Input::get('about_me', NULL);
			$player->facebook_URL = Input::get('facebook_URL', NULL);
			$player->save();

			return Redirect::action('PlayerController@showAccountsPage')->with('success', 'The player has been updated.');
		} else {
			Input::flash();
			return Redirect::action('PlayerController@showAccountsPage', Input::get('id'))->withErrors($v->messages());
		}
	}

	/**
	 * Deletes a player from the database. Returns redirect to accounts page.
	 *
	 * @return Return a redirect to the accounts page
	 */
	public function deletePlayer() {
		$player = Player::find(Input::get('id'))
					->delete();

		return Redirect::action('PlayerController@showAccountsPage')->with('success', 'The player has been deleted.');
	}	
}