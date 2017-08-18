<?php

Route::get('/', 'PostsController@index');

Route::get('/posts', 'PostsController@view');
Route::get('/post/{link}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/create', 'PostsController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
