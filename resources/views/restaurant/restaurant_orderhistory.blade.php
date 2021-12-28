@extends('layouts.restaurant')

@section('title', '注文履歴')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_orderhistory">
            <h2>＜注文履歴＞</h2>
            @foreach ($restaurants->orders as $order)
            <div class="order-table">
            <table border="1" align="center">
            <tr>
                <th>注文者名</th>
                <th>料理名</th>
                <th>個数</th>
                <th>注文金額</th>
                <th>来店時間</th>
                <th>注文時間</th>
            </tr>
            <tr>
                <td> {{$order->user->name}}</td>
                <td></td>
                <td>{{$order->menu_amount}}個</td>
                <td>¥{{$order->totalprice}}</td>
                <td>{{$order->come_date}} {{$order->come_time}}</td>
                <td>{{$order->updated_at}}</td>
            </tr>
            </table>
            </div>
            <div class="menu">
            <img src="{{ $menu->image_path }}" alt="画像">
            <div class="order-table">
            <table border="1" align="center">
               <tr><th>料理名</th><td>{{ $menu->food }}</td></tr>
               <tr><th>店舗名</th><td>{{ $menu->restaurant->name }}</td></tr>
               <tr><th>店舗ID</th><td>{{ $menu->restaurant->id }}</td></tr>
               <tr><th>住所</th><td>{{ $menu->restaurant->address }}</td></tr>
               <tr><th>ランチタイム</th><td>11:00~13:00</td></tr>
               <tr><th>金額</th><td>¥{{ $menu->price }}</td></tr>     
             </table>
            </div>
        </div>
            @endforeach
    </main>
@endsection