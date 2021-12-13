<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Order;

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
        $R_orderhistories = Order::all();
        // dd($R_orderhistories);
        return view('restaurant_orderhistory',['R_orderhistories'=>$R_orderhistories]);
    }

    public function index()
    {
        $orderlists = Order::all();
        return view('restaurant_account', ['orderlists'=>$orderlists]);
    }


    public function __construct()
    {
        $this->middleware('auth:restaurant');
    }

    public function index()
    {
        return view('restaurant.restaurant_account');
    }
    
    public function Restaurantdetail()
    {
        $Restaurantdetails = Restaurant::all();
        return view('restaurant_detail', ['Restaurantdetails'=>$Restaurantdetails]);
    }


}
