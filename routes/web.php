<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
Route::get('/','App\Http\Controllers\ContactController@show')->name('create');
Route::post('add','App\Http\Controllers\ContactController@store');
Route::get('/data','App\Http\Controllers\ContactController@index')->name('show');
Route::get('edit/{id}','App\Http\Controllers\ContactController@edit')->name('update');
Route::post('edit/{id}','App\Http\Controllers\ContactController@update')->name('edit');
Route::delete('delete/{id}','App\Http\Controllers\ContactController@destroy')->name('delete');

