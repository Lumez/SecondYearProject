<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* News/Home */
Route::get('/', 'HomeController@showHomePage');

/* Team */
Route::get('/team', 'TeamController@showTeamPage');

/* Fixtures */
Route::get('/fixtures', 'FixturesAndResultsController@showFixturePage');
Route::get('/deleteFixture', 'FixturesAndResultsController@deleteFixture');

/* League Table */
Route::get('/league', 'LeagueController@showLeaguePage');

/* Profile */
Route::get('/profile', array('before' => 'auth', 'uses' => 'PlayerController@showProfilePage'));

/* Login */
Route::get('/login', 'LoginController@showLoginPage');
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');

/* Email Subscribe */
Route::post('/subscribe', 'SubscribeController@addSubscriber');





