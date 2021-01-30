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

Route::view('/', 'main.main',)->name('main');
Route::get('/{color}/{bgcolor}','DarkmodeController@changecolor')->name('changecolor');
Route::post('/sendmail','AirConditionerController@sendmail')->name('sendmail');
Route::get('/admin','AirConditionerController@getadmin')->name('admin');
Route::post('/login','AirConditionerController@login')->name('login');
Route::get('/{id}','AirConditionerController@deleteorder')->name('delete');
Route::get('/back','AirConditionerController@back')->name('back');
