<?php 

/**
 * Controller for the home page. Displays the home page.
 *
 * @package HomeController
 */
class LoginController extends BaseController {

	public function showLoginPage() {
		return View::make('login');
	}

	public function doLogin() {
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::action('LoginController@showLoginPage')
				->withErrors($validator->messages()); // send back all errors to the login form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::action('PlayerController@showProfilePage');

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::action('LoginController@showLoginPage')
					->withErrors(array('<strong>Invalid Login</strong> - Please check you have entered your email and password correctly!'));

			}

		}
	}

	public function doLogout() {
		Auth::logout();
		return Redirect::action('HomeController@showHomePage')->with('success', 'You have successfully logged out.');
	}
}