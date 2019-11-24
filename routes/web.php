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

Route::resource('/diaries', 'DiaryController');
Route::resource('/diaries/{diary}/tags', 'TagController');
Route::resource('/cruds', 'CrudController');
Route::get('/curds/list', 'CrudController@list')->name('cruds.list');
Route::resource('/categories', 'CategoryController');


// laravel 青い本を動かして理解エリア
Route::get('/only', 'OnlyController');
