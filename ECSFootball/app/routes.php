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
Route::post('/addFixture', 'FixturesAndResultsController@addFixture');

/* League Table */
Route::get('/league', 'LeagueController@showLeaguePage');

/* Profile */
Route::get('/profile', array('before' => 'auth', 'uses' => 'PlayerController@showProfilePage'));

/* Accounts */
Route::get('/accounts/{playerId?}', array('before' => 'auth|admin', 'uses' => 'PlayerController@showAccountsPage'));
Route::post('/addAccount', array('before' => 'auth|admin', 'uses' => 'PlayerController@addPlayer'));
Route::post('/updateAccount', array('before' => 'auth|admin', 'uses' => 'PlayerController@updatePlayer'));
Route::filter('admin', function()
{
    if (!Auth::user()->is_admin)
    {
        return Redirect::to('/');
    }
});

/* Login */
Route::get('/login', 'LoginController@showLoginPage');
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');

/* Email Subscribe */
Route::post('/subscribe', 'SubscribeController@addSubscriber');

/* Contact Us */
Route::get('/contact', 'ContactController@showContactPage');





