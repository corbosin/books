<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', 'App\Http\Controllers\BookController@index')->name('books.index');
Route::get('books/create', 'App\Http\Controllers\BookController@create')->name('books.create');

Route::post('/books', 'App\Http\Controllers\BookController@store')->name('book.store');
