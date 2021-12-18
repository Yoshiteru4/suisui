<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;


class MenuController extends Controller
{
    //
    public function index()
    {
      $menus = Menu::all();
      return view('menu_list',['menus='=>$menus]);
    }
    public function create($id)
    {
      $restaurant = Restaurant::find($id);
      // dd($restaurant);
      return view('create',['restaurant'=>$restaurant]);
    }

    public function store(Request $request, $id)
    {
        $restaurant = Restaurant::find($id);
        $menus = new Menu();
        $menus->restaurant_id=$restaurant->id;
        $menus->food = $request->food;
        $menus->price = $request->price;
        if ($image = $request->file('image')) {
          $image_path = $image->getRealPath();
          Cloudder::upload($image_path, null);

          $publicId = Cloudder::getPublicId();
          $logoUrl = Cloudder::secureShow($publicId, 

          );
          $menus->image_path = $logoUrl;
          $menus->public_id  = $publicId;
      }
        $menus->save();
        return redirect('/restaurant_detail');
    }
    public function show()
    {
      $menus = Menu::all();
      return view('menu_list', ['menus'=>$menus]);
    }
}