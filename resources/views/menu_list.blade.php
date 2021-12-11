@extends('layouts.app')

@section('title', 'detail')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@section('top','メニューリスト')

@section('content')

<div class="menubox">
   @foreach($menus as $menu)
         <div class="menu">
            <img src="{{ $menu->image_path }}" alt="画像">
            <p>商品名：{{ $menu->food }}</p>
            <p>店舗名：{{ $menu->restaurant->name }}</p>
            <p>金額：{{ $menu->price }}円</p>
            <form action="/detail" method="get">
               <input type="submit" value="注文">
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