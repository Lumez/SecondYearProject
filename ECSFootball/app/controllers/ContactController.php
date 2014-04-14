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
			'first_name' => 'required|alpha',
			'last_name' => 'required|alpha',
			'email'=>'required|email',
			'subject' => 'required',
			'message' => 'required|min:25'
		);
		
		//Validate data
		$validator = Validator::make ($data, $rules);
		
		//If everything is correct than run passes.
		if ($validator -> passes()){

			//Add the users IP address to the data array
			$data = array_add($data, 'clientIP', Request::getClientIp());
		
			//Send email using Laravel send function
			Mail::send('emails.sendContact', array('data' => $data), function($message) use ($data)
			{
				//email to the ECSS Football account, cc-ing to Aaron, with the subject set by the user 
				$message->to('ecss.football@gmail.com')->cc('caiguoyuan@gmail.com')->subject('Contact Form Message');
			});
			
			return Redirect::action('ContactController@showContactPage')->with('success', 'Your message has been submitted. The team will contact you as soon as possible.');
		} else {
			Input::flash();
			return Redirect::action('ContactController@showContactPage')->withErrors($validator->messages());
		}
	}

}