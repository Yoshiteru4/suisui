@extends('layouts.app')

@section('title', 'detail')

@section('top','メニューリスト')

@section('content')
@foreach($menus as $menu)
   <p>{{ $menu->food }}</p>
   <p>{{ $menu->price }}</p>
   <hr>
@endforeach
@endsection