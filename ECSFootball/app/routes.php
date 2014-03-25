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

Route::get('/', 'HomeController@showHomePage');

Route::get('/profile', array('before' => 'auth', 'uses' => 'PlayerController@showProfilePage'));

Route::get('/login', 'LoginController@showLoginPage');
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');

Route::post('/subscribe', 'SubscribeController@addSubscriber');

Route::get('/fixtures', 'FixturesAndResultsController@showFixturePage');

Route::get('/team', 'TeamController@showTeamPage');