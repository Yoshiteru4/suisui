<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //
    // public function good($id)
    // {
    //     $user = Auth::user_id();
    //     $menu = Menu::find($id);
    //     $favorite = new Favorite();
    //     $favorite->user_id = $user->id;
    //     $favorite->menu_id = $menu->id;
    //     $favorite->save();
    //     return view('/menu_list');

    // }
    public function store(Request $request)
    {
        $favorite  = new Favorite();
        $favorite ->menu_id = $request->menu_id;
        $favorite ->user_id = Auth::user()->id;
        $favorite ->save();
        return redirect('/menu_list');
    }

    public function destroy(Request $request)
    {
        $favorite = Favorite::find($request->favorite_id);
        $favorite->delete();
        return redirect('/menu_list');
    }
    public function index()
    {
        $user = Auth::user()->id;
        $favorites = Favorite::latest('updated_at')->where('user_id',$user)->Paginate(3);
        
        // $favorites = Favorite::simplePaginate(3);
        // dd($favorites);
        return view('favorite',['favorites'=>$favorites]);
    }


}
