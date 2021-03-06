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

Route::get('/user/create', 'UserController@create');

Route::post('/user', ['uses'=>'UserController@store', 'as'=>'postForm']);

Route::get('/user/index', ['uses'=>'UserController@index', 'as'=>'index']);

Route::get('/news/create', 'NewsController@create');

Route::post('/news', ['uses'=>'NewsController@store', 'as'=>'postNews']);

Route::get('/news/result', ['uses'=>'NewsController@index', 'as'=>'allNews']);
