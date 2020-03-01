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


  /*Route::group([

  	    'middleware' => 'auth',

                'prefix'=>'backend',],
                function(){*/

  Route::get('/dashboard','BackendController@dashboard');

  Route::get('/','FrontendController@main')->name('main');


  Route::resource('/items','ItemController');


   Route::resource('/services','ServiceController');


  Route::resource('/packages','PackageController');


  


   /* });*/