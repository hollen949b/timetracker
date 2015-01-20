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


// Guest
Route::group(array('before' => 'guest'), function()
{
    Route::get('login',  array('uses' => 'AuthController@login'));
    Route::post('login', array('uses' => 'AuthController@postLogin'));
});

// Signed in
Route::group(array('before' => 'auth'), function()
{
    Route::get('/',      array('uses' => 'DashboardController@index'));
    Route::get('logout', array('uses' => 'AuthController@logout'));
});

