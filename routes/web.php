<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PublicController@index')->name('index');
Route::get('/about', 'PublicController@about')->name('about');
Route::post('/postContact', 'PublicController@postContact')->name('postContact');
Route::get('/contact', 'PublicController@contact')->name('contact');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function (){
   Route::get('dashboard', 'UserController@dashboard')->name('userDashboard');
   Route::get('comments', 'UserController@comments')->name('userComments');
});

Route::prefix('author')->group(function (){
    Route::get('dashboard', 'AuthorController@dashboard')->name('authorDashboard');
    Route::get('posts', 'AuthorController@posts')->name('authorPosts');
    Route::get('comments', 'AuthorController@comments')->name('authorComments');
});
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
    Route::get('posts', 'AdminController@posts')->name('adminPosts');
    Route::get('comments', 'AdminController@comments')->name('adminComments');
    Route::get('users', 'AdminController@users')->name('adminUsers');
});
