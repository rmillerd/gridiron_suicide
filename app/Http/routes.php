<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/', 'HomeController@welcome');
Route::get('/home', 'HomeController@index');
Route::get('/users', 'HomeController@index');

# Leagues
Route::get('/leagues', 'LeagueController@index');
Route::post('/league', 'LeagueController@store');
Route::delete('/league/{league}', 'LeagueController@destroy');

# Seasons
Route::get('/seasons', 'SeasonController@index');
Route::post('/season', 'SeasonController@store');
Route::delete('/season/{season}', 'SeasonController@destroy');

/*
Route::get('/season/teams', 'HomeController@index');
Route::get('/season/users', 'HomeController@index');
Route::get('/seasons/user/pick', 'HomeController@index');
*/

