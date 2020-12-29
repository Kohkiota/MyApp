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

Route::get('myapp/list', 'App\Http\Controllers\MyappController@list')->name('myapp/list');

Route::get('myapp/complete', 'App\Http\Controllers\MyappController@complete')->name('myapp/complete');

Route::get('myapp/findId', 'App\Http\Controllers\MemoController@findId')->name('myapp/findId');
Route::post('myapp/findId', 'App\Http\Controllers\MemoController@searchId')->name('myapp/findId');

Route::get('myapp/findName', 'App\Http\Controllers\MemoController@findName')->name('myapp/findName');
Route::post('myapp/findName', 'App\Http\Controllers\MemoController@searchName')->name('myapp/findName');

Route::get('myapp/add', 'App\Http\Controllers\MyappController@add')->name('myapp/add');
Route::post('myapp/add', 'App\Http\Controllers\MyappController@create')->name('myapp/add');

Route::get('myapp/edit', 'App\Http\Controllers\MyappController@edit')->name('myapp/edit');
Route::post('myapp/edit', 'App\Http\Controllers\MyappController@update')->name('myapp/edit');

Route::get('myapp/del', 'App\Http\Controllers\MyappController@delete')->name('myapp/del');
Route::post('myapp/del', 'App\Http\Controllers\MyappController@remove')->name('myapp/del');
