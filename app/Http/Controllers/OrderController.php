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
        // $menufood = $request->menufood;
        // $menuprice = $request->menuprice;
        $users = Auth::user()->name;
        $menuid = $request->input('menuid');
        $menufood = $request->input('menufood');
        $menuprice = $request->input('menuprice');
        $menuimage = $request->input('menuimage');
        $restaurantname = $request->input('restaurantname');
        return view('detail',compact('menuid','menufood','menuprice','menuimage','restaurantname','users'));
    }

    public function ordershow(Request $request)
    {
        // dd($request);
      $menuid = $request->input('menuid');
      $menufood = $request->input('menufood');
      $restaurantname = $request->input('restaurantname');
      $menuprice = $request->input('menuprice');
      $menuQuantity = $request->input('menuQuantity');
      $personQuantity = $request->input('personQuantity');
      $Comedate = $request->input('Comedate');
      $ComeTime = $request->input('ComeTime');
      $totalprice = $menuprice * $menuQuantity;
      return view('payment',compact('menuid','menufood','restaurantname','menuprice','menuQuantity','personQuantity','Comedate','ComeTime','totalprice'));
    }
    public function order_finish(Request $request)
  {
    $orders = new Order();
      $orders-> menu_id= $request->menuid;
      $orders-> user_id = Auth::user()->id;
      $orders->totalprice = $request->totalprice;
      $orders->menu_amount = $request->menuQuantity;
      $orders->person_amount = $request->personQuantity;
      $orders->come_date = $request->Comedate;
      $orders->come_time = $request->ComeTime;
      // dd($orders);
      $orders->save();
      $users = Auth::user()->name;
      $totalprice = $request->totalprice;
      return view('paymentcheck',compact('users','totalprice'));
  }
}

