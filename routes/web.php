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
Route::get('/search','HomeController@search')->name('search');

Route::prefix('user')->group(function (){
   Route::get('dashboard','UserController@dashboard')->name('userDashboard');
   Route::get('comments','UserController@comments')->name('userComments');
});

Route::prefix('author')->group(function (){
    Route::get('dashboard','AuthorController@dashboard')->name('authorDashboard');
    Route::get('posts','AuthorController@posts')->name('authorPosts');
    Route::get('comments','AuthorController@comments')->name('authorComments');
});

Route::prefix('admin')->group(function (){
   Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');
   Route::get('posts','AdminController@posts')->name('adminPosts');
   Route::get('comments','AdminController@comments')->name('adminComments');
   Route::get('users','AdminController@users')->name('adminUsers');
});