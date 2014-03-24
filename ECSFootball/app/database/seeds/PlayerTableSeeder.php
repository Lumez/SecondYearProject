<?php

class PlayerTableSeeder extends Seeder
{

	public function run()
	{
		Player::create(array(
			'first_name' => 'Ben',
			'last_name' => 'Kneebone',
			'email' => 'bk8g11@soton.ac.uk',
			'password' => Hash::make('awesome'),
			'is_admin' => '1',
			'about_me' => 'This an about me',
			'facebook_URL' => 'bk8g11',
		));
	}

}