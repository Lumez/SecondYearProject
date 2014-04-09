<?php

class Fixture extends Eloquent {

	// Don't use timestamp columns
	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var	string	the name of the table
	 */
	public $table = 'fixture';




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
                    'against_team'  => 'Required|Min:3|Max:30|AlphaNum',
                    'date'          => 'Required|date',
                    'ecs_score'     => 'Required|Max:3',
                    'against_score' => 'Required|Max:3',
                    'profile'       => 'Max:200',
                    'is_home'       => 'Integer|Size:1'
            );

        return Validator::make($input, $rules);
	}
}