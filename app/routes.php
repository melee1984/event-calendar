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

Route::get('/', 'ContentController@index');
Route::get('get/events', 'ContentController@listEvents');

Route::group(array('before' => 'csrf'), function() {
	
	Route::post('add/event/submit', 'ContentController@insertRecord');

});

Route::get('calendar/delete/all', 'ContentController@deleteRecord');