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
Route::get('home', function () {
    return view('home');
});

Route::get('notas', function () {
    return view('notas');
});

Route::get('listausuario',function(){
	return view('listausuario');
});

Route::get('nuevanota',function(){
	return view('home');
});

Route::get('nuevoUsuario',function(){
	return view('register');
});


Route::get('login',['uses'=>function(){
	return view('login');
	},
	'as'=>'inicio']
);

Route::post('nuevoUsuario','UserController@create');
Route::post('login','UserController@login');
Route::get('logout','UserController@logout');
Route::post('nota','NotaController@create');
