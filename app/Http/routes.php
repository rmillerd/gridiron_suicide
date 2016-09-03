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
Route::get('/leagues/{league_name}', 'LeagueController@details');
Route::post('/leagues/new', 'LeagueController@store');
Route::patch('/leagues/{league_name}/edit', 'LeagueController@patch');
Route::delete('/leagues/{league_name}', 'LeagueController@destroy');

# Seasons
Route::get('/leagues/{league_name}/seasons', 'SeasonController@index');
Route::get('/leagues/{league_name}/seasons/{season}', 'SeasonController@details');
Route::post('/leagues/{league_name}/seasons/new', 'SeasonController@store');
Route::patch('/leagues/{league_name}/seasons/{season_id}', 'SeasonController@patch');
Route::delete('/leagues/{league_name}/season/{season_id}', 'SeasonController@destroy');

# Teams
Route::get('/leagues/{league_name}/teams', 'TeamController@index');
Route::get('/leagues/{league_name}/teams/{team}', 'TeamController@details');
Route::post('/leagues/{league_name}/teams/{team}/new', 'TeamController@store');
Route::patch('/leagues/{league_name}/teams/{team}', 'TeamController@patch');
Route::delete('/leagues/{league_name}/teams/{team}', 'TeamController@destroy');

# Weeks
Route::get('/leagues/{league_name}/seasons/{season}/weeks', 'WeekController@index');
Route::get('/leagues/{league_name}/seasons/{season}/weeks/{week}', 'WeekController@details');
Route::post('/leagues/{league_name}/seasons/{season}/weeks/{week}/new', 'WeekController@store');
Route::patch('/leagues/{league_name}/seasons/{season}/weeks/{week}', 'WeekController@patch');
Route::delete('/leagues/{league_name}/seasons/{season}/weeks/{week}', 'WeekController@destroy');

# Games
Route::get('/leagues/{league_name}/seasons/{season}/weeks/{week}/games', 'GameController@index');
Route::get('/leagues/{league_name}/seasons/{season}/weeks/{week}/games/{game}', 'GameController@details');
Route::post('/leagues/{league_name}/seasons/{season}/weeks/{week}/games/new', 'GameController@store');
Route::patch('/leagues/{league_name}/seasons/{season}/weeks/{week}', 'GameController@patch');
Route::delete('/leagues/{league_name}/seasons/{season}/weeks/{week}', 'GameController@destroy');

# Picks
Route::get('/leagues/{league_name}/seasons/{season}/weeks/{week}/picks/{pick}','PickController@details');
/*

Route::get('/users', 'AuthController@index');
Route::get('/seasons/user/pick', 'HomeController@index');
*/
Route::get('/phpinfo', function(){
    return phpinfo();
});

Route::get('/import', 'UploadController@setup');
Route::post('/import', 'UploadController@process');
