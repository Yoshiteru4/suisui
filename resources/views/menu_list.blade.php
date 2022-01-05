@extends('layouts.app')

@section('title', 'detail')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@section('top','メニューリスト')

@section('content')

<h1 class="index">Menu</h1>

<div class="menubox">
   @foreach($menus as $menu)
         <div class="menu">
            <img src="{{ $menu->image_path }}" alt="画像">
            <div class="order-table">
            <table border="1" align="center">
               <tr><th>料理名</th><td>{{ $menu->food }}</td></tr>
               <tr><th>店舗名</th><td>{{ $menu->restaurant->name }}</td></tr>
               {{-- <tr><th>店舗ID</th><td>{{ $menu->restaurant->id }}</td></tr> --}}
               <tr><th>住所</th><td>{{ $menu->restaurant->address }}</td></tr>
               <tr><th>ランチタイム</th><td>11:00~13:00</td></tr>
               <tr><th>金額</th><td>¥{{ $menu->price }}</td></tr>     
            </table>
            </div>
      <form action="/detail"  method="post">
         @csrf

         <input type="hidden" name="menuid" value="{{$menu->id}}">
         <input type="hidden" name="menufood" value="{{$menu->food}}">
         <input type="hidden" name="menuprice" value="{{$menu->price}}">
         <input type="hidden" name="menuimage" value="{{$menu->image_path}}">         
         <input type="hidden" name="restaurantname" value="{{$menu->restaurant->name}}">         
         <input type="hidden" name="restaurant_id" value="{{$menu->restaurant->id}}">       

         <div class="order-btn1">
            <input type="submit"  class="order-btn" value="注文する">
         </div>
      </form>
            
            <div style="padding:10px 40px">
               @if($menu->favoritedBy(Auth::user())->count() > 0)
               <a href="/favorites/{{ $menu->favoritedBy(Auth::user())->firstOrFail()->id }}"><i class="fas fa-heart-broken fa-2x hurt"></i></a>
               @else
               <a href="/menus/{{ $menu->id}}/favorites"><i class="far fa-heart fa-2x hurt"></i></a>
               @endif
            </div>
         

         </div>
   @endforeach
</div> 

@endsection