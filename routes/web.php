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

Route::get('/bd', 'Bd@index');

Route::get('/bd/create', 'Bd@create');

Route::post('/bd/add','Bd@add')->name('add');

Route::get('/bd/del/{id}','Bd@del')->name('del');

Route::get('/bd/edit/{id}','Bd@edit')->name('edit');

Route::post('/bd/update/','Bd@update')->name('update');
