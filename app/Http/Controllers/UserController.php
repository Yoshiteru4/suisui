<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function UserPage()
    {
        return view('user');
    }
    public function FavoritePage()
    {
        return view('favorite');
    }
    
}
