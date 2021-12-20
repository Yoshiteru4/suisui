@extends('layouts.restaurant')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_account">
            <h2>＜今日の注文状況一覧＞</h2>
            @foreach($today_orders as $today_order)
            <p>注文時間：{{$today_order->updated_at}}</p>
            <p>来店時間：{{$today_order->come_date}}日{{$today_order->come_time}}</p>
            <p>料理名：{{$today_order->menu->food}}</p>
            <p>個数：{{$today_order->menu_amount}}</p>
            <p>合計金額：{{$today_order->totalprice}}</p>
            <hr>
            @endforeach
        </div>
    </main>
@endsection