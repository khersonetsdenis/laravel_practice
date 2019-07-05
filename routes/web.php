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

Route::get('/books', 'BookController@index')->name('list_books');
Route::get('book', 'BookController@create')->name('create');
Route::post('book', 'BookController@store')->name('create_book');
Route::get('/book/{id}', 'BookController@show');
Route::delete('/book/{id}', 'BookController@destroy')->name('delete_book');
Route::get('/book/{id}/edit', 'BookController@edit')->name('edit_book');
Route::post('/book/{id}/edit', 'BookController@update')->name('update_book');

Route::get('/book/{id}', 'BookController@show')->name('show_book');