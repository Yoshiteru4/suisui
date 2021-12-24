<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\Menu;
use Carbon\Carbon;



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
        $restaurants = Auth::user();
        $today = Carbon::today();
        $today_orders = Order::whereDate('updated_at',$today)->get();
        return view('restaurant.restaurant_account',['restaurants'=>$restaurants],['today_orders'=>$today_orders],);
    }

    public function RestaurantEdit()
    {
        $restaurants = Auth::user();
        $menus = Menu::all();
        return view('restaurant.restaurant_edit',['restaurants'=>$restaurants],['menus'=>$menus]);
    }

    public function index()
    {
        $R_orderhistories = Order::latest()->get();
        // dd($R_orderhistories);
        return view('restaurant.restaurant_orderhistory',['R_orderhistories'=>$R_orderhistories]);
    }

    public function __construct()
    {
        $this->middleware('auth:restaurant');
    }

    // public function restaurant_account()
    // {
    //     return view('restaurant.restaurant_account');
    // }
    
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
    public function edit($id)
    {
        $restaurants = Restaurant::find($id);
        return view('restaurant.restaurant_edit2', ['restaurants'=>$restaurants]);
    }
    public function update(Request $request)
    {
        $restaurants = Restaurant::find($request->id);
        $restaurants->name = $request->name;
        $restaurants->email = $request->email;
        $restaurants->update();
        // dd($restaurants);
        return redirect('/restaurant_edit');
    }
    public function destroy(Request $request)
    {
        // dd($request);
        $menus = Menu::find($request->id);
        $menus->delete();
        return redirect('/restaurant_detail');
    }
}
