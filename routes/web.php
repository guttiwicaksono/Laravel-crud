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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('books','BookController');

Auth::routes();

Route::get('/form','UserDetailController@form');

Route::get('/pdf', function () {
    return view('pdf');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/submitForm','UserDetailController@store');
Route::get('/index_user','UserDetailController@indexUser');
Route::get('/downloadPDF/{id}','UserDetailController@downloadPDF');
