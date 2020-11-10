<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Admin\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('/film', 'App\Http\Controllers\Admin\FilmController');
 
	Route::resource('acteur', 'App\Http\Controllers\Admin\ActeurController');

	Route::resource('/genre', 'App\Http\Controllers\Admin\GenreController');

	Route::resource('/realisateur', 'App\Http\Controllers\Admin\RealisateurController');

	Route::resource('/abonne', 'App\Http\Controllers\Admin\AbonnementController');

	Route::resource('/salle', 'App\Http\Controllers\Admin\SalleController');
	 
 

 
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

