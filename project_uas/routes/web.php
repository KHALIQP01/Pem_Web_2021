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

Route::get('/', 'GuestController@index')->name('home');
Route::get('last', 'GuestController@last')->name('last');
// Route::get('cendet', 'GuestController@cendet')->name('cendet');
// Route::get('cucakrowo', 'GuestController@cucakrowo')->name('cucakrowo');
// Route::get('cucakhijau', 'GuestController@cucakhijau')->name('cucakhijau');
// Route::get('kacer', 'GuestController@kacer')->name('kacer');
// Route::get('muraibatu', 'GuestController@muraibatu')->name('muraibatu');
Route::get('information', 'GuestController@information')->name('information');
Route::get('aboutme', 'GuestController@aboutme')->name('aboutme');
Route::get('home', 'TestController@index')->name('cobaah');

//kolibri
Route::get('kolibri', 'KolibriController@index')->name('kolibri');
Route::post('simpan-kolibri', 'KolibriController@store')->name('simpan-kolibri');

//muraibatu
Route::get('muraibatu', 'MuraibatuController@index')->name('muraibatu');
Route::post('simpan-muraibatu', 'MuraibatuController@store')->name('simpan-muraibatu');

//kacer
Route::get('kacer', 'KacerController@index')->name('kacer');
Route::post('simpan-kacer', 'KacerController@store')->name('simpan-kacer');

//cucakrowo
Route::get('cucakrowo', 'CucakrowoController@index')->name('cucakrowo');
Route::post('simpan-cucakrowo', 'CucakrowoController@store')->name('simpan-cucakrowo');

//cucakhijau
Route::get('cucakhijau', 'CucakhijauController@index')->name('cucakhijau');
Route::post('simpan-cucakhijau', 'CucakhijauController@store')->name('simpan-cucakhijau');

//cendet
Route::get('cendet', 'CendetController@index')->name('cendet');
Route::post('simpan-cendet', 'CendetController@store')->name('simpan-cendet');