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


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'IndexController@index');

Route::get('/adopta', 'AdoptaController@index');

Route::get('/sobreNosaltres', 'SobreNosaltresController@index');

Route::get('/gats', 'GatsController@index');

Route::get('/gossos', 'GossosController@index');

Route::get('/rosegadors', 'RosegadorsController@index');

Route::get('/detall/{id}', ['as' => 'detall', 'uses' => 'AdoptaController@detalle']);

Route::get('/apadrinar/{id}', ['as' => 'apadrinar', 'uses' => 'DetallController@apadrinar']);

Route::post('/apadrinar/{id}', 'ApadrinamentController@store');

Route::get('/adopcio/{id}', ['as' => 'adopcio', 'uses' => 'DetallController@adopcio']);

Route::post('/adopcio/{id}', 'AdopcionsController@store');

Route::get('/lesMevesAdopcions', 'LesMevesAdopcionsController@index');
Route::get('/lesMevesAdopcions/{id}/{animal_id}', 'LesMevesAdopcionsController@destroy');

Route::group(['middleware' => 'admin'], function(){
	Route::get('/gestioAdopcions', 'GestioAdopcionsController@index');
	Route::get('/gestioAdopcions/{id}/{animal_id}', 'GestioAdopcionsController@destroy');


	Route::get('/afegirAnimal', 'AfegirAnimalController@index');
	Route::post('/afegirAnimal', 'AfegirAnimalController@store');

	Route::get('/editarAnimal', 'EditarAnimalController@index');
	Route::post('/editarAnimal', 'EditarAnimalController@store');

	Route::get('/editarAnimal', 'EditarAnimalController@index');
	Route::get('/editarAnimal/{id}/', 'EditarAnimalController@store');
	Route::get('/editarAnimal1/{id}', ['as' => 'editarAnimal', 'uses' => 'EditarAnimalController@detalle']);
	Route::post('/editarAnimal1/{id}', 'EditarAnimal1Controller@store');

});


Route::get('/elsMeusApadrinaments', 'ElsMeusApadrinamentsController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
