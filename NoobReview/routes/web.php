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




Route::get('/review', function () {
    return view('series');
});

Route::get('/series-list','SeListController@sortDate' );

Route::get('/review/{ID}', 'ReviewController@linkReview' );

Route::get('/','IndexController@index' );

Route::get('/home', 'IndexController@index' );