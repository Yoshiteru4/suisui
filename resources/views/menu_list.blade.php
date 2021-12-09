@extends('layouts.app')

@section('title', 'detail')

<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@section('top','メニューリスト')

@section('content')
@foreach($menus as $menu)
   <div class="menubox">
      <img src="{{ $menu->image_path }}" alt="画像">
      <p>{{ $menu->food }}</p>
      <p>{{ $menu->price }}¥</p>
   </div>
@endforeach
@endsection