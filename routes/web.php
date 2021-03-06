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
Route::get('/', 'GuestController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::post('entries', 'EntryController@store')->name('entries');
Route::get('/entries/create', 'EntryController@create')->name('entries.create');

Route::get('/entries/{entryBySlug}', 'GuestController@show');


Route::get('/entries/{entry}/edit', 'EntryController@edit');
Route::put('/entries/{entry}/update', 'EntryController@update');

Route::get('/users/{user}', 'UserController@show');
