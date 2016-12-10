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
    return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/allarticles/{id}', 
  [ 'as' => 'allarticle',
	'uses'=>'categorie_articleController@allarticle']);

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('employees', 'employeesController');

Route::resource('salaries', 'salariesController');

Route::resource('users', 'UsersController');

Route::resource('demos', 'DemoController');

Route::resource('demos', 'DemoController');

Route::resource('clients', 'ClientController');

Route::resource('projets', 'ProjetController');

Route::resource('attributArticles', 'attribut_articleController');

Route::resource('entropots', 'entropotController');

Route::resource('categorieArticles', 'categorie_articleController');

Route::resource('articleHasAttributArticles', 'article_has_attribut_articleController');

Route::resource('articleHasEntropots', 'article_has_entropotController');

Route::resource('entreprises', 'entrepriseController');

Route::resource('sites', 'siteController');

Route::resource('users', 'usersController');

Route::resource('visitePreventives', 'visite_preventiveController');

Route::resource('usersHasVisitePreventives', 'users_has_visite_preventiveController');

Route::resource('articles', 'articleController');

Route::resource('usersHasVisitePreventives', 'users_has_visite_preventiveController');