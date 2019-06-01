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

Route::get('admin/news/create', 'Admin\NewsController@add');

Route::get('admin/profile/create','Admin\ProfileController@add');

Route::get('admin/profile/edit','Admin\ProfileController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
 });

 Route::group(['prefix' =>'admin', 'middleware'=> 'auth'], function() {
      Route::get('news/create', 'Admin\NewsController@add');
      Route::post('news/create', 'Admin\NewsController@create'); # 追記
      Route::post('profile/create', 'Admin\ProfileController@create');
      Route::post('profile/edit', 'Admin\ProfileController@update');
 });
