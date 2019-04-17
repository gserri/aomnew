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
/*HomePage Route*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/new', 'HomeController@index2')->name('new');
Route::get('/try', function () {
    return view('Home.try');
});

/* Products Route*/
Route::get('/shop', 'ProductController@index')->name('shop');
