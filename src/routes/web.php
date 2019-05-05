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

Route::get('/login', 'AuthController@login');
Route::get('/account', 'AccountController@index' );
Route::post('/auth/submit', 'AuthController@submit');
Route::get('/auth/check', 'AuthController@check');
Route::get('/auth/logout', 'AuthController@logout');

Route::get('/user', 'UserController@index');
Route::post('/user/create', 'UserController@create');

