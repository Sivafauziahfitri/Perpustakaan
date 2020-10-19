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

use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'homeController@index')->name('home');

Route::group(['prefix' => 'databuku'], function(){
    Route::get('index', 'PerpusController@index')->name('databuku.index');

    Route::get('create', 'PerpusController@create')->name('databuku.create');
    
});