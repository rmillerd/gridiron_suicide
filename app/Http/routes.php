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

/*Route::get('/', function () {
    return view('HomeController@index');
});

Route::get('/home', function() {
    return view('bootstrap-test');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('/login', function() {
    return view('bootstrap-test');
});*/

Route::auth();
Route::get('/', 'HomeController@welcome');
Route::get('/home', 'HomeController@index');
Route::get('/users', 'HomeController@index');
Route::get('/seasons', 'HomeController@index');
Route::get('/season/teams', 'HomeController@index');
Route::get('/season/users', 'HomeController@index');
Route::get('/seasons/user/pick', 'HomeController@index');


