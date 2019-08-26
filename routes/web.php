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

//kanban
Route::get('/kanban' , 'PageController@kanban');
Route::get('/loginkanban' , 'KanbanController@login');
Route::get('/kanbanregister' , 'KanbanController@register');
Route::post('/postlogin' , 'AuthController@postlogin');
Route::post('/postuser','AuthController@create');
Route::get('/project' , 'ProjectsController@index');
Route::get('/project/{project}' , 'ProjectsController@show');
Route::get('/team' ,         'KanbanController@team');
Route::get('/kanban/login' , 'ProjectsController@index');
Route::post('/projects' ,'ProjectsController@store');

//end kanban

Route::get('/pengaturan' , 'PageController@pengaturan');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
