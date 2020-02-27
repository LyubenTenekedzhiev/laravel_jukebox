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

// Showing all songs
Route::get('/songs', 'SongController@index');
// Creating new songs
Route::get('/songs/create', 'SongController@create');
Route::post('/songs/add', 'SongController@addToDB');
// Editing existing songs
Route::get('/songs/edit/{id}', 'SongController@edit');
Route::post('/songs/edit/{id}', 'SongController@update');
// Deleting songs
Route::get('/songs/delete/{id}', 'SongController@delete');
