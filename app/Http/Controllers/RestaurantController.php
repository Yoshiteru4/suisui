<?php

namespace App\Http\Controllers;

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
        return view('restaurant_account');
    }

    public function RestaurantEdit()
    {
        return view('restaurant_edit');
    }

    public function RestaurantOrderhistory()
    {
        return view('restaurant_orderhistory');
    }
}
