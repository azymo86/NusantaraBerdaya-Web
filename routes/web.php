<?php

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'pageController@index');
Route::get('/tes', 'pageController@test');
Route::post('/tes/save', 'pageController@test_save');
