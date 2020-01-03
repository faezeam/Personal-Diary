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

Auth::routes();

Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
Route::get('/p/create' , 'NotesController@create');
Route::get('/p/{note}' , 'NotesController@show');
Route::get('/p/{note}/edit' , 'NotesController@edit')->name('note.edit');
Route::patch('/p/{note}' , 'NotesController@update')->name('note.update');
Route::post('/p' , 'NotesController@store');
