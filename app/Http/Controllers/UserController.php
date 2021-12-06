<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function UserPage()
    {
        $user = Auth::user();
        return view('user',['user'=>$user]);
    }

    public function FavoritePage()
    {
        return view('favorite');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('useredit', ['user'=>$user]);
    }

    
}