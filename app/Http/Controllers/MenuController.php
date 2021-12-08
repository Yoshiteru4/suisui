<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    //
    public function index()
    {
      $menus = Menu::all();
      return view('menu_list',['menus='=>$menus]);
    }
    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
        $menus = new Menu();
        $menus->restaurant_id=1;
        $menus->food = $request->food;
        $menus->price = $request->price;
        $menus->save();
        return redirect('/menu_list');
    }
    public function show()
    {
      $menus = Menu::all();
      return view('/menu_list', ['menus'=>$menus]);
    }
}