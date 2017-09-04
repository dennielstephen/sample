<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index')->name('home');
Route::get('/#form1-6', 'FrontController@index')->name('contact');
Route::get('/about', 'FrontController@about_us')->name('about');
Route::get('/breast_exam', 'FrontController@breast_exam')->name('breast_exam');
Route::get('/programs', 'FrontController@programs')->name('programs');
Route::get('/donate_us', 'FrontController@donate')->name('donate_us');
