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
	public function showFixtureList() {
		$latestFixtures = Fixture::orderBy('date', 'desc')
						->take(5)
						->get();

		if ( Auth::check() && Auth::user()->is_admin ){
			return View::make('fixtureAdmin', array('fixtures' => $latestFixtures));
		}else {
			return View::make('fixture', array('fixtures' => $latestFixtures));
		}		
		
	}
	
	public function deleteFixture(){
		
		$fixture = Fixture::find(Input::get('fixture_id'))
						->delete();	

		return Redirect::action('FixturesAndResultsController@showFixturesPage')->with('success', 'The fixture has been deleted.');
	}
	
	public function addFixture(){
		$validator = Fixture::validate(Input::all());

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

			return Redirect::action('FixturesAndResultsController@showFixturesPage')->with('success', 'The fixture has been added.');
		}else{
			Input::flash();
			return Redirect::action('FixturesAndResultsController@showFixturesPage')->withErrors($validator->messages());
		}
	}
	
	
	public function updateFixture() {
		$validator = Fixture::validate(Input::all());

		if ($validator->passes()) {
			$fixture = Fixture::find(Input::get('fixture_id'));
			$fixture->against_team = Input::get('against_team');
			$fixture->date = Input::get('date');
			$fixture->ecs_score = Input::get('ecs_score');
			$fixture->is_home = Input::get('is_home');
			$fixture->against_score = Input::get('against_score');
			$fixture->profile = Input::get('profile');
			$fixture->save();

			return Redirect::action('FixturesAndResultsController@showFixturesPage')->with('success', 'The fixture has been updated.');
		} else {
			Input::flash();
			return Redirect::action('FixturesAndResultsController@showFixturesPage', Input::get('id'))->withErrors($validator->messages());
		}	
	}

	public function showFixturesPage($fixtureID = null) {
		if (!$fixtureID == null) {
			return $this->showFixture($fixtureID);
		} else {
			return $this->showFixtureList();
		}
	}

	public function showFixture($fixtureID) {
		$fixture = Fixture::where('fixture_id', '=', $fixtureID)
					->first();

		if ( Auth::check() && Auth::user()->is_admin ){
			return View::make('fixtureUpdate', array('fixture' => $fixture));
		} else {
			return Redirect::action('FixturesAndResultsController@showFixturesPage');
		}
	}
}


