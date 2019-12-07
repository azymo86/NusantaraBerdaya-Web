<?php

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'pageController@index');
Route::get('/campaigns', 'pageController@campaigns');
Route::get('/activities', 'pageController@activities');
Route::get('/tes', 'pageController@test');
Route::post('/tes/save', 'pageController@test_save');

Route::get('/halo-admin/dashboard', 'adminController@dashboard');
