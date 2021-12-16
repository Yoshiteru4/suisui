@extends('layouts.restaurant')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_orderhistory">
            <h2>＜注文履歴＞</h2>


                @foreach ($R_orderhistories as $R_orderhistory)
                    <P>{{ $R_orderhistory->updated_at}}</P>
                    <P>料理名：{{ $R_orderhistory->menu->food}}：{{ $R_orderhistory->menu_amount}}</P>
                    <P>注文者名：{{ $R_orderhistory->user->name}}</P>
                    <P>合計金額：¥{{ $R_orderhistory->totalprice}}</P>

                    <hr>
                @endforeach

                
        </div>
    </main>
@endsection