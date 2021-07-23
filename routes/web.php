<?php

use Illuminate\Support\Facades\Auth;
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
/*

Route::get('/', function () {
  $test = 'Hello World';
  return view('site/home',compact('test'));
});

*/

//Route::post('contact/submit',function (){
////   return 'Okay';
//    dd(Request::all());
//})->name('contact-form');

//Route::get('/test', function () {
//    App::setLocale('hy');
//    if( App::isLocale('hy')){
//        dd(App::getLocale());
//    }
//});

//Route::get('locale/{locale}', 'HomeController@locale')->name('locale');
//Route::middleware(['set_locale'])->group(function (){
//
//    Route::get('/', 'HomeController@index')->name('home');
//    Route::get('about','AboutUsController@about')->name('about');
//    Route::get('search','AboutUsController@search')->name('search');
//    Auth::routes();
//});

Route::get('/session/get', 'SessionController@getSessionData');
Route::get('/session/set', 'SessionController@setSessionData');
Route::get('/session/remove', 'SessionController@unsetSessionData');

Route::redirect('/','/en');

Route::group(['prefix' => '{language}'] , function (){

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('about','AboutUsController@about')->name('about');
    Route::get('search','AboutUsController@search')->name('search');
    Route::get('contact','ContactController@contact')->name('contact');
    Route::get('contact/data','ContactController@selectData')->name('contact-data');

    Auth::routes();

});

Route::get('contact/data/{id}','ContactController@showOneData')->name('contact-data-show-one');
Route::get('contact/data/{id}/update','ContactController@updateOneData')->name('contact-data-update');
Route::get('contact/data/{id}/delete','ContactController@updateOneDataDelete')->name('contact-data-delete');
Route::post('contact/data/{id}/update','ContactController@updateOneDataSubmit')->name('contact-data-update-submit');
Route::post('contact/submit','ContactController@contactForm')->name('contact-form');





