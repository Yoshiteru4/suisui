@extends('layouts.restaurant')

@section('title', '注文履歴')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')

    <div class="restaurant_orderhistory">
        <h2>＜注文履歴＞</h2>
        <div class="order-table">
            @foreach ($orders as $order)
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
                        <td> {{ $order->user->name }}</td>
                        <td>{{$order->menu->food}}</td>
                        <td>{{ $order->menu_amount }}個</td>
                        <td>¥{{ $order->totalprice }}</td>
                        <td>{{ $order->come_date }} {{ $order->come_time }}</td>
                        <td>{{ $order->updated_at }}</td>
                </tr>
            </table>
        </div>
    </div>
@endforeach
@endsection