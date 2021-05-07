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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'PhotoController@index')->name('photo_index');

Route::resource('/', 'PhotoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('strings', 'ExemplosController@strings')->name('strings');
Route::get('numbers', 'ExemplosController@numbers')->name('numbers');
Route::get('forms', 'ExemplosController@forms')->name('forms');
Route::get('arrays', 'ExemplosController@arrays')->name('arrays');
