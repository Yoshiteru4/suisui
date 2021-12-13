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
        return view('detail');
    }
    public function store(Request $request)
    {
        // dd($request);
        // $menufood = $request->menufood;
        // $menuprice = $request->menuprice;
        $menufood = $request->input('menufood');
        $menuprice = $request->input('menuprice');
        return view('detail',compact('menufood','menuprice'));
    }

    public function ordershow(Request $request)
    {
      $menufood = $request->input('menufood');
      $menuprice = $request->input('menuprice');
      $menuQuantity = $request->input('menuQuantity');
      $personQuantity = $request->input('personQuantity');
      $Comedate = $request->input('Comedate');
      $ComeTime = $request->input('ComeTime');
      $totalprice = $menuprice * $menuQuantity;
      return view('payment',compact('menufood','menuprice','menuQuantity','personQuantity','Comedate','ComeTime','totalprice'));
    }

}

