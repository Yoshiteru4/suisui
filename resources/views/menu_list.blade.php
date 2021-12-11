@extends('layouts.app')

@section('title', 'detail')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@section('top','メニューリスト')

@section('content')

<div class="menubox">
   @foreach($menus as $menu)
      <form action="/detail" method="post">
         @csrf
         <div class="menu">
            <img src="{{ $menu->image_path }}" alt="画像">
            <p>商品名：{{ $menu->food }}</p>
            <p>店舗名：{{ $menu->restaurant->name }}</p>
            <p>値段：{{ $menu->price }}円</p>
               <input type="submit" value="注文">
      </form>
            
         </div>
   @endforeach
</div> 

@endsection