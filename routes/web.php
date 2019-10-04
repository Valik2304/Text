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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::match(['get','post'],'/', ['uses' => 'LoginController@execute','as' => 'login']);

Route::match(['get','post'],'/planner', ['uses' => 'PlanerController@execute','as' => 'plans']);

Route::match(['get','post'],'/bum', ['uses' => 'Login2Controller@execute','as' => 'login2']);

