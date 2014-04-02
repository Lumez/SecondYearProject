<?php

/**
 * Controller for the home page. Displays the home page.
 *
 * @package HomeController
 */
class FixturesAndResultsController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showFixturePage() {
		$latestFixtures = Fixture::orderBy('date', 'desc')
						->take(5)
						->get();

		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
		if ( Auth::check() && Auth::user()->is_admin ){
			return View::make('fixtureAdmin', array('fixtures' => $latestFixtures));
		}else {
			return View::make('fixture', array('fixtures' => $latestFixtures));
		}		
		
	}
	public static function deleteFixture(){
		echo 'dude';
		$fixID = Input::get('id');
		DB::table('fixture')->where('fixture_id', '=', $fixID)->delete();
		//Fixture::delete("delete from fixture where fixture_id={$fixID}");
		//$fixture = Game::find($fixID);
		//$fixture->delete();
		return Redirect::action('FixturesAndResultsController@showFixturePage')->with('success', 'You have successfully deleted the fixture!');
	}
}