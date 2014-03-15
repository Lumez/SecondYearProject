<?php

class Article extends Eloquent {

	// Don't use timestamp columns
	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var	string	the name of the table
	 */
	public $table = 'article';




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
                'reviewer' => 'Required|Min:3|Max:30|AlphaNum',
                'comment'     => 'Required|Max:200',
                'liked'       => 'Required|Integer|Size:1'
        );

        return Validator::make($input, $rules);
	}
}