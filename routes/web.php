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
    return view('naomi.home');
});
Route::get('/fee', 'FrontController@fee')->name('fee');
Route::get('/student', 'FrontController@student')->name('student');
Route::get('/student/store' , 'StudentsController@store');
Route::get('/fee/store', 'FeesController@store');
Route::get('search','FeesController@search' )->name('search');
Route::get('/searchid' , 'FeesController@searchstudent')->name('searchstudent');

