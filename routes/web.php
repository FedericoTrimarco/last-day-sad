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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about-us', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('form-contact');

Route::get('/thank-you', 'ThankController@index')->name('thank-you');


