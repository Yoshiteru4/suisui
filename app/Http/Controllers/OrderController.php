<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\Menu;

class OrderController extends Controller
{

    //
    public function DetailPage()
    {
        // $users = Auth::user()->name;
        // dd($users);
        return view('detail',compact('users'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $users = Auth::user()->name;
        $menuid = $request->input('menuid');
        $menufood = $request->input('menufood');
        $menuprice = $request->input('menuprice');
        $menuimage = $request->input('menuimage');
        $restaurantname = $request->input('restaurantname');
        $restaurant_id = $request->input('restaurant_id');
        return view('detail',compact('menuid','menufood','menuprice','menuimage','restaurantname','users','restaurant_id'));
    }

    public function ordershow(Request $request)
    {
        // dd($request);
      $menuid = $request->input('menuid');
      $menufood = $request->input('menufood');
      $restaurantname = $request->input('restaurantname');
      $restaurant_id = $request->input('restaurant_id');
      $menuprice = $request->input('menuprice');
      $menuQuantity = $request->input('menuQuantity');
      $personQuantity = $request->input('personQuantity');
      $Comedate = $request->input('Comedate');
      $ComeTime = $request->input('ComeTime');
      $totalprice = $menuprice * $menuQuantity;
      return view('payment',compact('menuid','menufood','restaurantname','menuprice','menuQuantity','personQuantity','Comedate','ComeTime','totalprice','restaurant_id'));
    }
    public function order_finish(Request $request)
  {
    // dd($request);
    $orders = new Order();
      $orders-> menu_id= $request->menuid;
      $orders-> user_id = Auth::user()->id;
      $orders->totalprice = $request->totalprice;
      $orders->menu_amount = $request->menuQuantity;
      $orders->person_amount = $request->personQuantity;
      $orders->come_date = $request->Comedate;
      $orders->come_time = $request->ComeTime;
      $orders->restaurant_id = $request->restaurant_id;
      // dd($orders);
      $orders->save();
      $users = Auth::user()->name;
      $totalprice = $request->totalprice;
      return view('paymentcheck',compact('users','totalprice',));
  }
  public function orderhistory()
  {
    $users = Auth::user();
    $orders = Order::all();
    return view('user_orderhistory',compact('users','orders'));
  }
}

