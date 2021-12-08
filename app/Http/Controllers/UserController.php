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

    public function edit($id)
    {
        $user = User::find($id);
        return view('useredit', ['user'=>$user]);
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        return redirect('/user');
    }
    
}