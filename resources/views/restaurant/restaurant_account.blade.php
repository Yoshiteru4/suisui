@extends('layouts.restaurant')
@section('title', '今日の注文履歴')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_orderhistory">
            <h2>＜今日の注文履歴＞</h2>
            <div class="order-table">
        @foreach ($today_orders as $today_order) 
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
                <td> {{ $today_order->user->name }}</td>
                <td>{{$today_order->menu->food}}</td>
                <td>{{ $today_order->menu_amount }}個</td>
                <td>¥{{ $today_order->totalprice }}</td>
                <td>{{ $today_order->come_date }} {{$today_order->come_time }}</td>
                <td>{{ $today_order->updated_at }}</td>
            </tr>
        </table>
        @endforeach
    </main>
@endsection