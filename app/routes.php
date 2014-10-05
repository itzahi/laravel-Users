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

Route::get
('/','HomeController@showWelcome');
//Route::controller('/', 'HomeController');
Route::get('login','SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions','SessionsController');//,array('only'=>array('index','create','destroy')));

Route::get('profile', function()
{
    return "your emails is : " . Auth::user()->email;
})->before('auth');


//Route::post('login', 'LoginAuthController@postLogin');

Route::get('/', array('as' => 'home',function()
    {
        return 'Home page';
    }
));

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('profile/prof', function()
{
    return "your emails is : " . Auth::user()->email;
});

Route::resource('registration','RegistrationController');//,array('only'=>array('index','create','destroy')));

//register routing for creation
Route::get('register', 'RegistrationController@create');


//post register

Route::post('register', 'RegistrationController@store');
