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

Route::group( array( 'prefix' => 'users'), function() {

			Route::post( 'insert', 'UsersController@insert' );
			Route::post( 'update', 'UsersController@update' );
			Route::delete( 'delete', 'UsersController@delete');

});
