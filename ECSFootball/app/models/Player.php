<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Player extends Eloquent implements UserInterface, RemindableInterface {

	// Don't use timestamp columns
	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'player';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Validates the input against the rules for the model
	 * and returns the resulting validator object
	 *
	 * @param array the array of inputs
	 *
	 * @return Validator the resulting Validator
	 */
	public static function validate($input) {

        $rules = array(
                'first_name' => 'Required|Max:50|AlphaNum',
                'last_name'  => 'Required|Max:50|AlphaNum',
                'email'      => 'Required|Max:255|Email',
                'password'   => 'Required|Min:3',
                'facebook'   => 'Max:255',
                'is_admin'   => 'Integer|Size:1'
        );

        return Validator::make($input, $rules);
	}

}