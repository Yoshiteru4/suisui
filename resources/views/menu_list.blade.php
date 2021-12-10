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
            <p>値段：{{ $menu->price }}円</p>
            <form action="/detail" method="get">
               <input type="submit" value="注文">
            </form>
            <div style="padding10px 40px">
               @if($menu->favoriteBy(Auth::user())->count > 0)
               <a data-remote="true" rel="nofollow" data-method="DELETE" href="/favorites/{{ $menu->favoriteBy(Auth::user())->first0rfail()->id }}">お気に入り</a>
            </div>
         </div>
   @endforeach
</div> 

@endsection