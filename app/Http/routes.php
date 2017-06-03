<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');

Route::resource('/','ArticlesController',[
                                        'only'=>['index'],
                                        'names'=>[
                                            'index'=>'home'
                                        ]

]);
Route::resource('articles','ArticlesController',[
                                                'parametres'=>[
                                                    'articles'=>'alias',

                                                ]
]);

Route::get('login','Auth\AuthController@showLoginForm');
Route::post('login','Auth\AuthController@login');
Route::get('logout','Auth\AuthController@logout');


Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
    Route::get('/',['uses' => 'Admin\IndexController@index', 'as'=>'adminIndex']);
    Route::resource('/articles','Admin\ArticlesController');
});
