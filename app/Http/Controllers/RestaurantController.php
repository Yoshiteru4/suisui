<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    //
    public function RestaurantShowPage()
    {
        $restaurants = Restaurant::all();
        return view('restaurant_list',['restaurants' => $restaurants]);
    }

    public function RestaurantAccount()
    {
        return view('restaurant.restaurant_account');
    }

    public function RestaurantEdit()
    {
        return view('restaurant_edit');
    }

    public function RestaurantOrderhistory()
    {
        return view('restaurant_orderhistory');
    }

    public function __construct()
    {
        $this->middleware('auth:restaurant');
    }

    public function index()
    {
        return view('restaurant.restaurant_account');
    }
    
}
