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

Route::get('/index1' , 'PageController@home');
Route::get('/tenant' , 'PageController@tenant');
Route::get('/inkubator' , 'PageController@inkubator');
Route::get('/hilirisasi' , 'PageController@hilirisasi');
Route::get('/layanan' , 'PageController@layanan');

//kanban
Route::group(['domain'=>'kanban.com'],function(){
Route::get('/logout' , 'AuthController@logout');
Route::get('/kanbanregister' , 'KanbanController@register');
Route::post('/postlogin' , 'AuthController@postlogin');
Route::post('/postuser','AuthController@create');
Route::get('/login' , 'KanbanController@login')->name('login');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/' , 'PageController@kanban');
    
    //user
    Route::get('/edit_user' , 'AuthController@edit');
    Route::post('/update_user' , 'AuthController@update');
    Route::post('/user/cari' , 'AuthController@cari');

    //home
    Route::get('/kanban' , 'PageController@kanban');

    //project
    Route::get('/project' , 'ProjectsController@index');
    Route::get('/project/{project}' , 'ProjectsController@show');
    Route::get('/project/{project}/edit' , 'ProjectsController@show2');
    Route::post('/projects' ,'ProjectsController@store');
    
        //delete
        Route::get('/project/{project}/delete' , 'ProjectsController@destroy');
        //update
        Route::post('/project/{project}/edit' , 'ProjectsController@edit');
        Route::post('/project/update' , 'ProjectsController@update');
    
    //team
    Route::get('/team' , 'KanbanController@team');
    Route::get('/team/{team}' , 'TeamController@show');
    Route::post('/postteam' , 'TeamController@store');
        //teamproject
        Route::get('/projects/{projectteam}/{team}','Projectteams@show');

    //list
    Route::post('/postlist' ,'ListsController@store');
    Route::post('/posttask' ,'TasksController@store');
        //teamlist
        Route::post('/postlist/team' ,'ListTeamController@store');
    
    //task
    Route::post('/task/{id_list}/{id_task}' , 'ListsController@task');
    Route::get('/list/{list}' , 'ListsController@show');
        //team
        Route::post('/posttask/team','TaskTeamController@store');
        Route::get('/taskteam/{TaskTeam}/{team}/{list}/{project}/edit','TaskTeamController@show');
        route::post('/taskteam/{id}/edit','TaskTeamController@edit');
            //taskhandle
            route::post('/posthandle','TaskHandlesController@store');
    
    
    //member
    Route::get('/team/{team}/member' , 'TeamController@show2');
    Route::get('/member/{member}/{team}/details','MembersController@show');
    Route::post('/postmember' , 'MembersController@store');
    route::get('/member/{member}/delete','MembersController@destroy');

    //projectteam
    Route::post('/postteamproject','Projectteams@store');
    
});
});

//end kanban

Route::get('/pengaturan' , 'PageController@pengaturan');
Route::get('/home', 'HomeController@index')->name('home');


