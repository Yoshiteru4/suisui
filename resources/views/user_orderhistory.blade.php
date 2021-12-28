@extends('layouts.app')

@section('top','Suisui')

@section('content')

<link rel="stylesheet" href="{{ asset('css/user_orderhistory.css') }}">
<body>
    <h1 class="title">注文履歴</h1>
    <div class="menubox">
    @foreach ($users->orders as $order)
        <div class="menu">
            <img src="{{ $order->menu->image_path }}" alt="画像">
            <div class="order-table">
            <table border="1" align="center">
               <tr><th>料理名</th><td>{{ $order->menu->food }}</td></tr>
               <tr><th>店舗名</th><td>{{ $order->menu->restaurant->name }}</td></tr>
               <tr><th>個数</th><td>{{ $order->menu_amount }}</td></tr>
               <tr><th>注文金額</th><td>¥{{ $order->totalprice }}</td></tr>
               <tr><th>来店日時</th><td>{{$order->come_date}}：{{$order->come_time}}</td></tr>     
             </table>
             <form action="/detail" method="post">
                @csrf
                <input type="hidden" name="menuid" value="{{$order->menu->id}}">
                <input type="hidden" name="menufood" value="{{$order->menu->food}}">
                <input type="hidden" name="menuprice" value="{{$order->menu->price}}">
                <input type="hidden" name="menuimage" value="{{$order->menu->image_path}}">         
                <input type="hidden" name="restaurantname" value="{{$order->menu->restaurant->name}}">
                <div class="order-btn1">
                    <input type="submit"  class="order-btn" value="もう一度注文する">
                </div>
            </form>
            </div>
        </div>
    @endforeach
</body>
@endsection
