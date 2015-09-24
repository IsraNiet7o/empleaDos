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


Route::resource('/Aspirante/Admin', 'AdminUserController');
Route::resource('/Aspirante/create','IndexController@create');
Route::resource('/Aspirante/Change','IndexController@changeCuenta');
Route::resource('/Company', 'CompanyController');
Route::resource('/Company/create', 'CompanyController@create');
Route::resource('/Busqueda/Vacante', 'VacanteController');
Route::resource('/Vacante/{id}/show', 'VacanteController@show');
Route::resource('/Aspirante/Curriculum','CurriculumController@create');
Route::resource('/Aspirante/SubirCV','CurriculumController@upCurriculum');
Route::resource('/Servicios/create','ServiciosController@create');


Route::get('/Aspirante/Postulaciones','AdminUserController@getPostu');
Route::get('/Aspirante/RecuperarCuenta','IndexController@getCuenta');
Route::get('/','FrontController@index');
Route::get('/Preguntas/User','FrontController@preguntasUser');
Route::get('/review','FrontController@review');





//Route::controller([
//	'auth'=>'Auth\AuthController',
// 	]);