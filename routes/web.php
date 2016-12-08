<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('protected', ['middleware' => ['auth','admin'], function() {
 return "this page requires that you be logged in as Admin";
}]);
Route::resource('home', 'TrainersController');
Route::get('/home/{id}', 'TrainersController@show');
Route::get('/trainers', 'TrainersController@index');
Route::resource('trainers.pokemons','PokemonsController');
Route::get('/profile/{id}', 'ProfileController@show');
Route::get('/submit/{id}',[
        'uses' => 'SubmitController@update',
          ]);
Route::resource('admin' , 'AdminController');
Route::get('/delete/{id}', 'DeleteController@destroy');
Route::get('/add/{name}', [
    'uses' => 'AddController@store',
    'as' => 'pokemon.name',
   ]);
Route::resource('edit' , 'EditController');
Route::get('/edit/{id}' , [
        'uses' => 'EditController@show',
	  ]);
Route::get('/search/{name}' ,[
	'uses' => 'SearchController@show',
	  ]);
