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


define('I', '/include/');//view include


Route::get('/', function () {
    return view('index');
});
Route::get('home', function () {
    return view('index');
});

Route::resource('register', 'RegisterController');
route::get('create','TicketController@create');

Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@loginUser');

Route::group(['middleware'=>'auth'],function(){
	Route::resource('ticket', 'TicketController');
	route::post('create','TicketController@updateStatus');
});

Route::get('logout', 'LoginController@logout');

