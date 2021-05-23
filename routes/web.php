<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addprofp', 'AjouterMembreController@addprofp');
Route::get('/addprofnp', 'AjouterMembreController@addprofnp');
Route::get('/adddoc', 'AjouterMembreController@adddoc');
Route::get('/adddoctorant', 'AjouterMembreController@adddoctorant');

Route::get('/ajouterstructure', 'PageController@ajouterstructure');

Route::get('/afficherstructures', 'PageController@afficherstructures');

Route::post('/ajouterprofp', 'AjouterMembreController@ajouterprofp');

Route::get('/test', 'AjouterMembreController@test');

Route::resource('structures', 'StructureController');


