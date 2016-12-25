<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'index', 'uses' => 'IndexController@index']);

Route::get('/customer/{id}', function($id) {
  $customer = App\Customer::find($id);
  echo $customer->name;
});

Route::get('blog', ['as'=>'blog.list', 'uses' => 'BlogController@list']);
Route::get('blog/{id}', ['as'=>'blog.detail', 'uses'=>'BlogController@detail']);
