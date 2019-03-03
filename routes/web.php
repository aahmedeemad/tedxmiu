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

Route::get('/', 'pagesController@home');
Route::get('/about', 'pagesController@about');
Route::get('/team', 'pagesController@teams');
Route::get('/team/{year_id}', 'pagesController@team');
Route::get('/team/{year_id}/{department_name}', 'pagesController@department');
Route::get('/event', 'pagesController@events');
Route::get('/event/{event_id}', 'pagesController@event');
Route::get('/speaker/{speaker_id}', 'pagesController@speaker');
Route::get('/sponsor', 'pagesController@sponsor');

/*Route::resource('events', 'eventsController');*/

Auth::routes();

Route::get('/admin', 'AdminController@index');