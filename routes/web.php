<?php

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'pageController@index');
Route::get('/tes', 'campaignController@show');
Route::post('/tes/save', 'campaignController@save');
