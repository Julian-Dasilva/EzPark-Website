<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('about.html', 'WelcomeController@about');
Route::get('blog.html', 'WelcomeController@blog');
Route::get('contact.html', 'WelcomeController@contact');
Route::get('index.html', 'WelcomeController@index');
Route::get('home.html', 'WelcomeController@index');
Route::get('register.html', 'WelcomeController@register');
Route::get('parking.html', 'WelcomeController@parking');
Route::get('landingR.html', 'WelcomeController@landingR');
Route::get('landingP.html', 'WelcomeController@landingP');
Route::post('parking', 'RegistrationController@parking');



Route::post('registration', 'RegistrationController@register');
Route::post('login', 'Auth\AuthController@postLogin');
