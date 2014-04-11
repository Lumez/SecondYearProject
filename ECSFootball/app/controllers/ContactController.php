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
		//$Players = Player::get();
		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
		return View::make('contact');
	}
	
	public function getContactUsForm(){

		//Get all the data and store it inside Store Variable
		$data = Input::all();
		
		//Validation rules
		$rules = array (
			'firstname' => 'required|alpha',
			'surname' => 'required|alpha',
			'email'=>'numeric|email',
			'subject' => 'required|email',
			'message' => 'required|min:25'
		);
		
		//Validate data
		$validator = Validator::make ($data, $rules);
		
		//If everything is correct than run passes.
		if ($validator -> passes()){
		
			//Send email using Laravel send function
			Mail::send('emails.hello', $data, function($message) use ($data)
			{
				//email 'From' field: Get users email add and name
				$message->from($data['email'] , $data['first_name']);
				//email 'To' field: cahnge this to emails that you want to be notified. 
				$message->to('me@gmail.com', 'my name')->cc('me@gmail.com')->subject('contact request');
			});
			
			return Redirect::action('ContactController@showContactPage')->with('success', 'The email have been sent. The team will contact you us soon as possible');
		} else {
			Input::flash();
			return Redirect::action('ContactController@showContactPage')->withErrors($validator->messages());
		}
	}

}