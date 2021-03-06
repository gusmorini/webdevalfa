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

//exemplo rota com paramtro opcional
// Route::get('welcome/{name?}', function($name='visitante'){
//     return "Seja bem vindo $name";
// })->where('name','[A-Za-z]+');

// Route::get('hello', function(){
//     return "Hello World";
// });

// Route::get('/', function () {
//     return view('welcome');
// });

//usando o artisan make:controller

Route::get('dashboard', 'DashController@index');
Route::get('dashboard-list', 'DashController@list');
Route::get('dashboard-forms', 'DashController@forms');
//Route::get('dashboard-login', 'DashController@login');
Route::get('dashboard-recuperar', 'DashController@recuperar');
Route::get('dashboard-resetar', 'DashController@resetar');

Route::get('/', 'PagesController@index');
Route::get('categoria', 'PagesController@categoria');
Route::get('empresa', 'PagesController@empresa');
Route::get('contato', 'PagesController@contato');