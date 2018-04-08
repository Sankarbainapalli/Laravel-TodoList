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


Route::get('/home','PagesController@index');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');

Route::post('/contact/submit','PagesController@submit');

Route::put('/delete','PagesController@destroy');
Route::get('/todo','PagesController@getData');

Route::get('/data','PagesController@dataList');

Route::resource('posts','PostsController');
// Route::get('posts/create','PostsController@create');
Route::get('/index','PostsController@index');