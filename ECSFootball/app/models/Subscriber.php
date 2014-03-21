<?php

class Subscriber extends Eloquent {

	// Don't use timestamp columns
	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var	string	the name of the table
	 */
	public $table = 'subscriber';




	/**
	 *
	 * THIS IS NOT FOR THIS PROJECT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	 *
	 * Validates the input against the rules for the model
	 * and returns the resulting validator object
	 *
	 * @param array the array of inputs
	 *
	 * @return Validator the resulting Validator
	 */
	public static function validate($input) {

        $rules = array(
                'email' => "Required|email|exists:subscriber,email",
                
        );

        return Validator::make($input, $rules);
	}
}