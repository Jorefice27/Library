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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_books', 'BookController@add');
Route::get('/delete_books', 'BookController@delete');
Route::get('/shelves', 'ShelfController@index');
Route::get('/borrow_history', 'LoanController@index');

Route::post('/add_books', 'BookController@create');
Route::post('/delete_books', 'BookController@remove');
Route::patch('/shelves', 'BookController@borrow');
