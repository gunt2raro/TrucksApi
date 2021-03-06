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
//Use api models

Route::get('/', function () {
    return view( 'welcome' );
});

//Api routes
Route::group( array( 'prefix' => 'api' ), function(){

	//models
	Route::resource( 'tractors', 'TractorController' );
	Route::resource( 'cajas', 'CajaController' );
	Route::resource( 'chofers', 'ChoferController' );
	//Lantas
	//Authentication
	Route::resource( 'users', 'Auth\AuthController' );
	Route::resource( 'roles', 'RolController' );
	//Daños
	Route::resource( 'dano_esq_cajas', 'DanoEsqCajaController' );
	Route::resource( 'dano_esq_tractors', 'DanoEsqTractorController' );
	//Esquematicos
	Route::resource( 'esq_cajas', 'EsqCajaController' );
	Route::resource( 'esq_tractors', 'EsqTractorController' );
	//Especific functions
	Route::get( 'tractors/ByUserId/{id}', 'TractorController@getByUserId' );
	Route::get( 'cajas/ByTractorId/{id}', 'CajaController@getByTractorId' );
	//Get esquematico por tractor id
	//Get esquematico por caja id
	//Get daños por esquematico tactor
	//Get daños por esquematico caja
	//Get llantas por tractor
	//Get llantas por caja
});//End of api routes definition

//Images route
Route::resource( 'files', 'ImageController' );