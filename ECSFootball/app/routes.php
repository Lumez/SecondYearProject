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

Route::filter('admin', function()
{
    if (!Auth::check() || !Auth::user()->is_admin)
    {
        return Redirect::to('/');
    }
});

/* News/Home */
Route::get('/', 'HomeController@showHomePage');
Route::get('/articles/{articleId?}', 'HomeController@showArticlePage');
Route::post('/deleteArticle', array('before' => 'auth|admin', 'uses' => 'HomeController@deleteArticle'));
Route::post('/updateArticle', array('before' => 'auth|admin', 'uses' => 'HomeController@updateArticle'));
Route::get('/article/edit/{articleId?}', 'HomeController@showArticleUpdatePage');
Route::post('/addArticle', array('before' => 'auth|admin', 'uses' => 'HomeController@addArticle'));


/* Team */
Route::get('/team', 'TeamController@showTeamPage');

/* Fixtures */
//No auth on this one as everyone need to be able to access parts of this page, auth has to be done in controller
Route::get('/fixtures/{fixtureId?}', 'FixturesAndResultsController@showFixturesPage');

Route::post('/addFixture', array('before' => 'auth|admin', 'uses' => 'FixturesAndResultsController@addFixture'));
Route::post('/updateFixture', array('before' => 'auth|admin', 'uses' => 'FixturesAndResultsController@updateFixture'));
Route::post('/deleteFixture', array('before' => 'auth|admin', 'uses' => 'FixturesAndResultsController@deleteFixture'));

/* League Table */
Route::get('/league', 'LeagueController@showLeaguePage');

/* Profile */
Route::get('/profile', array('before' => 'auth', 'uses' => 'PlayerController@showProfilePage'));
Route::post('/profile/update', array('before' => 'auth', 'uses' => 'PlayerController@updateProfile'));
Route::post('/profile/password', array('before' => 'auth', 'uses' => 'PlayerController@changePassword'));

/* Accounts */
Route::get('/accounts/{playerId?}', array('before' => 'auth|admin', 'uses' => 'PlayerController@showAccountsPage'));
Route::post('/addAccount', array('before' => 'auth|admin', 'uses' => 'PlayerController@addPlayer'));
Route::post('/updateAccount', array('before' => 'auth|admin', 'uses' => 'PlayerController@updatePlayer'));
Route::post('/deleteAccount', array('before' => 'auth|admin', 'uses' => 'PlayerController@deletePlayer'));

/* Login */
Route::get('/login', 'LoginController@showLoginPage');
Route::post('/login', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@doLogout');

/* Email Subscribe */
Route::post('/subscribe', 'SubscribeController@addSubscriber');
Route::get('/unsubscribe/{shortId?}', 'SubscribeController@removeSubscriber');

/* Contact Us */
Route::get('/contact', 'ContactController@showContactPage');
Route::post('/contact','ContactController@getContactUsForm');





