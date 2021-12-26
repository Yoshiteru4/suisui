@extends('layouts.restaurant')

@section('title', '今日の注文履歴')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_account">
            <h2>＜今日の注文状況一覧＞</h2>
            @foreach ($today_orders as $order)
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </table>
            </div>
        </div>
            @endforeach
        </div>
    </main>
@endsection