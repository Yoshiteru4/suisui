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
        $restaurantId = Auth::user()->id;

        // クエリ（SQL）を変数へ一旦入れておくとコードがスッキリする。
        $query = Restaurant::find($restaurantId)->orders();
        // ログインしているレストランに紐づく注文を全件取得
        $orders = $query->get();
        // dd($orders);
        // レストランに紐づく注文のうち、今日の注文のみ取得
        $today_orders = $query->whereDate('created_at', Carbon::today())->get();
        dd($today_orders);
        return view('restaurant.restaurant_account', ['orders' => $orders, 'today_orders' => $today_orders]);
    }

    public function RestaurantEdit()
    {
        $restaurants = Auth::user();
        $menus = Menu::all();
        return view('restaurant.restaurant_edit',['restaurants'=>$restaurants],['menus'=>$menus]);
    }

    public function index()
    {
        $restaurantId = Auth::id();
        $orders = Restaurant::find($restaurantId)->orders()->get();
        // $menus = Restaurant::find($restaurantId)->menus();
        // dd($orders);
        return view('restaurant.restaurant_orderhistory',['orders'=>$orders],['restaurantId'=>$restaurantId]);
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
