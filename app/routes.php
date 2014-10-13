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

// show the hello page
Route::get('/','HomeController@showWelcome');
// for login page
Route::get('login','SessionsController@create');
// for logout
Route::get('logout', 'SessionsController@destroy');
//sessions resource (update, edit..)
Route::resource('sessions','SessionsController');
// return the user profile
Route::get('profile', 'SessionsController@profile');
Route::get('user/{id}', 'SessionsController@update');
Route::post('user/{id}', 'SessionsController@update');
Route::get('edit', 'SessionsController@edit');
Route::post('edit', 'SessionsController@edit');
Route::get('add_article', function()
{
    return 'soon';
});

Route::get('test', function()
{
    return View::make('test');
});


Route::resource('registration','RegistrationController');//,array('only'=>array('index','create','destroy')));

//register routing for creation
Route::get('register', 'RegistrationController@create');


//post register

Route::post('register', 'RegistrationController@store');
