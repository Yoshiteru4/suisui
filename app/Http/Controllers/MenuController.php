<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    //
    public function MenuPage()
    {
        return view('menu_list');
    }

    public function DetailPage()
    {

        return view('detail');
    }
}