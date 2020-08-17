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
Route::get('/', 'Main@index');

Route::get('/Testcontroller', 'TestController@index');

Route::post('/Testcontroller','TestController@bd_add')->name('bd_add');

Route::post('/Testcontroller','TestController@delete')->name('delete');
