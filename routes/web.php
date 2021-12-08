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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu_list','MenuController@MenuPage');

Route::get('/detail','MenuController@DetailPage');

Route::get('/payment_check','PaymentController@PaymentPage');

Route::get('/payment_finish','PaymentController@PaymentLastPage');


Route::get('/restaurant_list','RestaurantController@RestaurantShowPage')->name('restaurant_list');

//検索結果を表示する
Route::get('/search','MenuController@search');

//ユーザー一覧と検索画面
Route::get('/index','MenuController@index');
// ジャンル検索
Route::get('/genre_search','SearchController@genre_search')->name('genre_search');;


// Route::get('/search', 'SearchController@SearchPage');

Route::get('/favorite','UserController@FavoritePage');

Route::get('/user/{id}/edit' , 'UserController@edit');

Route::put('/user' , 'UserController@update');

Route::get('/user', 'UserController@UserPage');

Route::get('/welcome', 'WelcomeController@WelcomePage');

// 支払い・クレジット系
Route::get('/payment', 'PaymentController@index')->name('payment');

Route::post('/payment','PaymentController@payment');

Route::get('/create', 'MenuController@create');

Route::post('/menu_list','MenuController@store');

Route::get('/menu_list','MenuController@show');






