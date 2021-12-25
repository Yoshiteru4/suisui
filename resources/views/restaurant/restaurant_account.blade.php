@extends('layouts.restaurant')

@section('title', '今日の注文履歴')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_account">
            <h2>＜今日の注文状況一覧＞</h2>
            @foreach ($today_orders as $today_order)
            <p>{{$today_order->come_date}}</p>
            <p>{{$today_order->updated_at}}</p>
            <hr>
            @endforeach
        </div>
    </main>
@endsection