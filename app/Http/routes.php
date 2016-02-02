<?php

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/influencer/home', 'InfluencerController@index');
    Route::get('/influencer/dashboard', 'InfluencerController@dashboard');
    Route::get('/brand/home', 'BrandsController@index');
    Route::get('/brand/dashboard', 'BrandsController@dashboard');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
