<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PublicController@index')->name('index');
Route::get('/about', 'PublicController@about')->name('about');
Route::post('/postContact', 'PublicController@postContact')->name('postContact');
Route::get('/contact', 'PublicController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
});
