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


Route::get('/xxx', function () {
    session()->put("language","vi");
    //session()->forget('language');
    return view('welcome');
});

Route::get('/vue', function () {
    //session()->forget('language');
    return view('test.demovue');
});

Route::get("/","HomeController@index");

Route::any('setup',"SetupController@index");
