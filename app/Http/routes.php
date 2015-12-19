<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|puede ser post,get , put, delete
*/

Route::get('/',['as'=>'frontend.index','uses'=>'IndexController@index']);
Route::get('/aspirante/create',['as'=>'frontend.create','uses'=>'IndexController@create']);
Route::get('/aspirante/change',['as'=>'index.change','uses'=>'IndexController@changeCuenta']);
Route::get('preguntas/aspirante',['as'=>'frontend.preguntas','uses'=>'IndexController@preguntasUser']);
Route::get('/company', ['as'=>'frontend.company.anuncios','uses'=>'IndexController@anunciosCompany']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/admin/application',['as'=>'admin.home','uses'=> 'AdminController@index']);

Route::get('/aspirante/admin',['as'=>'adminuser.home','uses'=> 'AdminUserController@index']);
Route::get('/aspirante/postulaciones',['as'=>'adminuser.postu','uses'=>'AdminUserController@getPostu']);

Route::get('/busqueda/vacante', ['as'=>'vacante.index','uses'=>'VacanteController@index']);
Route::get('/vacante/{id}/show', ['as'=>'vacante.show','uses'=>'VacanteController@show']);
Route::get('/vacante/create', ['as'=>'vacante.create','uses'=>'VacanteController@create']);
Route::get('/vacante/admin', ['as'=>'vacante.admin','uses'=>'VacanteController@admin']);
Route::get('/servicios/create',['as'=>'services.create','uses'=>'ServiciosController@create']);


Route::get('/aspirante/curriculum',['as'=>'curriculum.create','uses'=>'CurriculumController@create']);
Route::get('/aspirante/subircv',['as'=>'curriculum.upcurriculum','uses'=>'CurriculumController@upCurriculum']);
Route::get('/aspirante/{id}/cvshow',['as'=>'curriculum.show','uses'=>'CurriculumController@show']);
Route::get('/aspirante/mispreferencias',['as'=>'preferences.create','uses'=>'PreferencesController@create']);

Route::get('/company/admin', ['as'=>'company.index','uses'=>'CompanyController@index']);
Route::get('/company/create', ['as'=>'company.create','uses'=>'CompanyController@create']);
Route::get('/company/{id}/data', ['as'=>'company.edit','uses'=>'CompanyController@edit']);
Route::get('/company/{id}/account', ['as'=>'company.edit_cuenta','uses'=>'CompanyController@editCuenta']);

Route::get('/company/prospect', ['as'=>'prospect.index','uses'=>'ProspectController@index']);
Route::get('/company/busqueda', ['as'=>'prospect.search','uses'=>'ProspectController@search']);

Route::get('/aspirante/recuperarCuenta',['as'=>'frontend.getcuenta','uses'=>'IndexController@getCuenta']);
//Route::get('/review','FrontController@review');


