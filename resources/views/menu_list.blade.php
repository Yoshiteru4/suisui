@extends('layouts.app')

@section('title', 'detail')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@section('top','メニューリスト')

@section('content')

<h1 class="index">メニュー一覧</h1>

<div class="menubox">
   @foreach($menus as $menu)
         <div class="menu">
            <img src="{{ $menu->image_path }}" alt="画像">
            <p>商品名：{{ $menu->food }}</p>
            <p>店舗名：{{ $menu->restaurant->name }}</p>
            <p>住所:{{ $menu->restaurant->address }}</p>
            <p>ランチタイム:{{ $menu->restaurant->lunchhour}}</p>
            <p>金額：{{ $menu->price }}円</p>
      <form action="/detail"  method="post">
         @csrf

         <input type="hidden" name="menuid" value="{{$menu->id}}">
         <input type="hidden" name="menufood" value="{{$menu->food}}">
         <input type="hidden" name="menuprice" value="{{$menu->price}}">
         <input type="hidden" name="menuimage" value="{{$menu->image_path}}">         
         <input type="hidden" name="restaurantname" value="{{$menu->restaurant->name}}">         

         <input type="submit"  class="order-btn" value="注文する">
      </form>
            
            <div style="padding:10px 40px">
               @if($menu->favoritedBy(Auth::user())->count() > 0)
               <a href="/favorites/{{ $menu->favoritedBy(Auth::user())->firstOrFail()->id }}"><i class="fas fa-heart-broken fa-2x hurt"></i></a>
               @else
               <a href="/menus/{{ $menu->id}}/favorites"><i class="far fa-heart fa-2x hurt"></i></a>
               @endif
            </div>
            {{-- {{ $menu->favorites->count() }} --}}

         </div>
   @endforeach
</div> 

@endsection