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
//     return view('contact');
// });

Route::get('/', 'App\Http\Controllers\ContactController@index');
Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create');
Route::post('/contacts', 'App\Http\Controllers\ContactController@store');
Route::get('/contacts/{id}/edit', 'App\Http\Controllers\ContactController@edit');
Route::patch('/contacts/{id}', 'App\Http\Controllers\ContactController@update');
Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@destroy');

// Route::get('/', 'App\Http\Controllers\ContactController@index');






