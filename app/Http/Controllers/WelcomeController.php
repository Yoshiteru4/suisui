<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function WelcomePage()
    {
        return view('welcome');
    }


    public function show()
    {
        $menus = Menu::all();
        // dd($menus);
        return view('welcome', ['menus'=>$menus]);
    }
}
