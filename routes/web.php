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


Route::get('/', 'FrontController@welcomePage');

Route::get('/contact-form', 'FrontController@contactForm');
Route::post('/contact-form', 'FrontController@contactFormSubmit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');\

Route::post('/subscribe', 'FrontController@subscribe');


//Route::get('/test-mejla', function(){
// $user = \App\User::find(1);
//
// return new \App\Mail\WelcomeMail($user);
//
//});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
