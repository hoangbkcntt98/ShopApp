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

Route::get('/', function () {
    return view('layouts.home');
})->name('/');

Auth::routes();
Route::get('/viewprofile/{id}','ViewProfileController@show')->name('viewpf');
Route::get('/home', 'HomeController@index')->name('home');
