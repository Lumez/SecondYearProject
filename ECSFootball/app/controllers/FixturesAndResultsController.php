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
	
	public function delete_destroy(){
		
		Fixture::find(Input::get('fixture_id'))->delete();
		return Redirect::back()->with('success', 'You have deleted a fixture from the database');
	}
	
	public function addFixture(){
			/* model */
		$validator = Fixture::validate(Input::all());

				/* the validator have a function call passes()*/
		if($validator->passes()){
			
			$date_old = Input::get('date');
			$date_new = date("Y-m-d", strtotime($date_old));

			$fixture = new Fixture;
			$fixture->against_team = Input::get('against_team');
			$fixture->date = $date_new;
			$fixture->ecs_score = Input::get('ecs_score');
			$fixture->against_score = Input::get('against_score');
			$fixture->profile = Input::get('profile');
			$fixture->is_home = Input::get('is_home');
			$fixture->save();

			return Redirect::back()->with('success', 'You have a new fixture to the database');
		}else{
			/*fail*/

			Input::flash();
			return Redirect::back()->withErrors($validator->messages());

		}
	}
}