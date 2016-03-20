<?php

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', 'HomeController@index');

	Route::get('/store/browse/{genre_id}', 'StoreController@browse');

	Route::get('/store/details/{album_id}', 'StoreController@details');

	Route::get('/cart', 'CartController@index');

	Route::get('/cart/add/{album_id}', 'CartController@add');
});
