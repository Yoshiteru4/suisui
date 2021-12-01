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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu_list','MenuController@MenuPage');

Route::get('/detail','MenuController@DetailPage');

Route::get('/payment_check','PaymentController@PaymentPage');

Route::get('/payment_finish','PaymentController@PaymentLastPage');

Route::get('/timeline', 'TweetController@showTimelinePage')->name('timeline');
