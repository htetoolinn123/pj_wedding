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

Route::group([
  'prefix' => 'backend',
],function(){

  Route::get('/dashboard','BackendController@dashboard');

  Route::resource('/items','ItemController');

  Route::resource('/services','ServiceController');

  Route::resource('/packages','PackageController');
});




  Route::get('/','FrontendController@main')->name('main');

  Route::get('/about','FrontendController@about')->name('about');
  Route::get('/blog','FrontendController@blog')->name('blog');

  Route::get('/faq','FrontendController@faq')->name('faq');
  Route::get('/photography','FrontendController@photography')->name('photography');

  Route::get('/contact','FrontendController@contact')->name('contact');
    
  Route::get('/package','FrontendController@package')->name('package');

  Route::get('/detailpackage/{id}','FrontendController@detailpackage')->name('detailpackage');
   
  Route::get('/book','FrontendController@book')->name('book');
  

  Route::post('/itembyservice','AjaxController@getitem')->name('getitem');




  


   /* });*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
