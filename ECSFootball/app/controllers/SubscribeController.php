<?php

/**
 * Controller for the sidebar. Displays in all page.
 *
 * @package HomeController
 */
class SubscribeController extends BaseController {

	/**
	 * Check if there is an existing email address in the database.
	 * Add subscriber into the databse if this is a new email address.
	 *
	 * @return View the view to be displayed
	 */
	public function addSubscriber() {
			/* model */
		$validator = Subscriber::validate(Input::all());

				/* the validator have a function call passes()*/
		if($validator->passes()){

			$subscriber = new Subscriber;
			$subscriber->email = Input::get('email');
			$subscriber->save();

			return Redirect::back()->with('success', 'You have been added to the mailing list.');
		}else{
			/*fail*/

			Input::flash();
			return Redirect::back()->withErrors($validator->messages());

		}
	}


	public function removeSubscriber(){





	}

}