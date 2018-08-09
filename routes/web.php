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

Route::get('/', 'PublicController@index')->name('index');
Route::get('about', 'PublicController@about')->name('about');
Route::get('post/{id}', 'PublicController@singlePost')->name('singlePost');
Route::get('contact', 'PublicController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function (){
   Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
});