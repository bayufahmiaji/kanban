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

use Illuminate\Routing\Router;

Route::get('/' , 'PageController@home');
Route::get('/index1' , 'PageController@home');
Route::get('/tenant' , 'PageController@tenant');
Route::get('/inkubator' , 'PageController@inkubator');
Route::get('/hilirisasi' , 'PageController@hilirisasi');
Route::get('/layanan' , 'PageController@layanan');
Route::get('/kanban' , 'PageController@kanban');
Route::get('/pengaturan' , 'PageController@pengaturan');

