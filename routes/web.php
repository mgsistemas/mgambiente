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

Route::resource('projetos','ProjetoController');
Route::resource('batchs','BatchController');
Route::resource('backlogs','BackLogController');

Route::get('batchs/search/{txt}',['uses'=>'BatchController@busca', 'as'=>'batch.busca']);
Route::get('backlogs/search/{txt}',['uses'=>'BackLogController@busca', 'as'=>'backlog.busca']);
