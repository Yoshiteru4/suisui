@extends('layouts.restaurant')

@section('title', '注文履歴')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_orderhistory">
            <h2>＜注文履歴＞</h2>


            @foreach ($restaurants->orders as $order)
            <p>注文者名：{{$order->user->name}}</p>
            <p>注文時間：{{$order->updated_at}}</p>
            {{-- <p>店舗名：{{$order->restaurants->name}}</p> --}}
            {{-- <p>料理名：{{$order->menus->food}}</p> --}}
            <p>個数：{{$order->menu_amount}}</p>
            <p>注文金額：¥{{$order->totalprice}}</p>
            <p>来店時間：{{$order->come_date}} ：{{$order->come_time}}</p>
            <hr>
            @endforeach

                
        </div>
    </main>
@endsection