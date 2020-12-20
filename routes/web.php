<?php

use Illuminate\Support\Facades\Route;

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

Route::get('myapp', 'App\Http\Controllers\MyappController@index')->name('myapp');

Route::get('myapp/add', 'App\Http\Controllers\MyappController@add')->name('myapp/add');
Route::post('myapp/add', 'App\Http\Controllers\MyappController@post')->name('myapp/add');

Route::get('myapp/list', 'App\Http\Controllers\MyappController@list')->name('myapp/list');

Route::get('myapp/complete', 'App\Http\Controllers\MyappController@complete')->name('myapp/complete');

Route::get('memo', 'App\Http\Controllers\MemoController@index');

Route::get('memo/find', 'App\Http\Controllers\MemoController@find')->name('memo/find');
Route::post('memo/find', 'App\Http\Controllers\MemoController@search')->name('memo/find');
