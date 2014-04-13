<?php

/**
 * Controller for the sidebar. Displays on all pages.
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
		if($validator->passes()) {

			$subscriber = new Subscriber;
			$subscriber->email = Input::get('email');
			$subscriber->save();

			Mail::send('emails.subscribed', array(), function($message) use ($subscriber)
			{
				$message->to($subscriber->email)->subject('Welcome to ECSS Football!');
			});

			return Redirect::back()->with('success', 'You have been added to the mailing list.');
		} else {
			/*fail*/

			Input::flash();
			return Redirect::back()->withErrors($validator->messages());

		}
	}


	public function removeSubscriber($shortId){
		$hashids = new Hashids\Hashids('nizze');

		$subscriber = Subscriber::findOrFail($hashids->decrypt($shortId));
		$subscriber->delete();

		return Redirect::action('HomeController@showHomePage')->with('success', 'You have been removed from the mailing list.');
	}

}