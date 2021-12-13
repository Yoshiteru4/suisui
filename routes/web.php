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

Route::get('/payment_finish','PaymentController@PaymentLastPage');

Route::get('/restaurant_list','RestaurantController@RestaurantShowPage')->name('restaurant_list');

Route::get('/search','SearchController@search');
//ユーザー一覧と検索画面
Route::get('/index','MenuController@index');
// ジャンル検索
Route::get('/genre_search','SearchController@genre_search')->name('genre_search');

Route::get('/index','SearchController@index');

Route::get('/genre_search','SearchController@genre_search')->name('genre_search');;

Route::post('/payments','MenuController@ordershow');

Route::get('/favorite','UserController@FavoritePage');

Route::get('/user/{id}/edit','UserController@edit');

Route::put('/user' , 'UserController@update');

Route::get('/user', 'UserController@UserPage');

Route::get('/welcome', 'WelcomeController@WelcomePage');

// restaurantアカウント群
Route::get('/restaurant_account', 'RestaurantController@restaurant_account');

Route::prefix('restaurant')->namespace('Restaurant')->name('restaurant.')->group(function()
{
    Auth::routes();
});

Route::get('restaurant/home', 'RestaurantController@RestaurantAccount')->name('restaurant_home');

// Route::get('/restaurant_account', 'RestaurantController@show');

Route::get('/restaurant_detail', 'RestaurantController@Restaurantdetail');

Route::get('/restaurant_edit', 'RestaurantController@RestaurantEdit');

Route::get('/restaurant_orderhistory', 'RestaurantController@index');

// 支払い・クレジット系
Route::post('/payment', 'PaymentController@index')->name('payment');

Route::get('/payment_finish', 'PaymentController@finish');

Route::post('/payment_check','PaymentController@payment');

Route::get('/create', 'MenuController@create');

Route::post('/menu_list','MenuController@store');

Route::get('/menu_list','MenuController@show');

Route::get('/menus/{menu_id}/favorites','FavoriteController@store');

Route::get('/favorites/{favorite_id}','FavoriteController@destroy');

Route::get('/favorite','FavoriteController@index');

Route::get('/welcome','WelcomeController@show');

