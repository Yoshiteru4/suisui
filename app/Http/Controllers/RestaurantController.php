<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\Menu;



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
        return view('restaurant.restaurant_edit');
    }

    public function index()
    {
        $R_orderhistories = Order::all();
        // dd($R_orderhistories);
        // $totalprice = $R_orderhistories->totalprice;
        return view('restaurant.restaurant_orderhistory',['R_orderhistories'=>$R_orderhistories]);
    }

    public function __construct()
    {
        $this->middleware('auth:restaurant');
    }

    public function restaurant_account()
    {
        return view('restaurant.restaurant_account');
    }
    
    // public function Restaurantdetail()
    // {
    //     $Restaurantdetails = Restaurant::where('id',1)->get();
    //     return view('restaurant.restaurant_detail', ['Restaurantdetails'=>$Restaurantdetails]);
    // }

    public function Restaurantdetail()
    {
        $Restaurant = Auth::user();
        // dd($Restaurant);
        return view('restaurant.restaurant_detail', ['Restaurant'=>$Restaurant,]);
    }

    public function show()
    {
        $Restaurant = Auth::user();
        $menus = Menu::all();
        return view('/restaurant_detail', ['menus'=>$menus]);
    }
}
