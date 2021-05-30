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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/ajouterstructure', 'PageController@ajouterstructure');
Route::get('/afficherstructures', 'PageController@afficherstructures');
Route::post('/structsupp', 'StructureController@supp');
Route::post('/structedit', 'StructureController@editer');
Route::post('/structnote', 'StructureController@note');

Route::get('/ajoutermembre', 'PageController@ajoutermembre');
Route::get('/affichermembres', 'PageController@affichermembres');

Route::get('/ajouterprof', 'PageController@ajouterprof');

Route::get('/modifcoeff', 'PageController@modifcoeff');

Route::get('/affichernote', 'PageController@affichernote');

//Route::get('/test1', 'AjouterMembreController@test');

Route::resource('structures', 'StructureController');

Route::resource('coeffs', 'CoeffController');

Route::resource('membres', 'MembreController');

Route::resource('profs', 'ProfController');

/** Route::get('/test', function () {

	

    Mail::to("honor9litehamza@gmail.com")->send(new \App\Mail\EnsatLab('hamza'));

    

    dd("Email is Send.");

}); */

Route::get('/profile', function(){

    return view('profile');
});




