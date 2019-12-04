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
Route::get('/', 'HomeController@index');
Route::get('/register', 'HomeController@registerIndex');
Route::post('/register', 'HomeController@register');
Route::get('/get-members', 'HomeController@getMembers');
Route::get('/events', 'HomeController@getEvents');
Route::get('/show-members', 'HomeController@showMembers');
