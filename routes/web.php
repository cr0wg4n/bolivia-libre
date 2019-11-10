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

#Auth::routes();
#Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ViewController@home');
Route::post('/message', 'MessageController@store');
Route::get('/message/{id}', 'MessageController@edit');
Route::post('/feedback', 'FeedbackController@store');
Route::get('/evidenciasform','EvidenceController@index');
Route::get('/evidencias','EvidenceController@pagination');
Route::post('/evidences', 'EvidenceController@store');
