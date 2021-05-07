<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('site/home');
//});


Route::get('/', 'MainController@home');
Route::get('about','MainController@about');

Route::get('reviews','MainController@reviews');
Route::post('reviews/check','MainController@reviews_check');