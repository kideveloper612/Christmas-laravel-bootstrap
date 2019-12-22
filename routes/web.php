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
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/Form1', 'HomeController@Form1')->name('Form1');
Route::post('/Form2', 'HomeController@Form2')->name('Form2');
Route::post('/Form3', 'HomeController@Form3')->name('Form3');
Route::post('/Form4', 'HomeController@Form4')->name('Form4');

Route::post('/send/email', 'HomeController@mail')->name('send.email');
