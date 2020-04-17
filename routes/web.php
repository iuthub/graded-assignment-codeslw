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

Route::get('/', 'TaskController@index')->name('task.index');
Route::post('/task', 'TaskController@store');
Route::get('/delete/{task}', 'TaskController@destroy')->name('task.destroy');
Route::get('task/edit/{task}','TaskController@edit')->name('task.edit');
Route:: post('/edit', 'TaskController@editdone')->name('task.editdone');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
