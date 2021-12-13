@extends('layouts.restaurant')

@section('content')
    <main>
        <div class="restaurant_account">
p
            <h2>＜注文状況一覧＞</h2>
            {{-- @foreach($orders as $order)
                <p>{{ $order->menu_id }}</p>
            @endforeach --}}
            <h2>＜お店の情報＞</h2>
            <div class="account">
                <h3>お店の名前</h3>
                <h3>メールアドレス</h3>
            </div>

            {{-- <h2><本日の注文状況＞</h2>
            @foreach ($orderlists as $orderlist)
                <P>{{ $orderlists }}</P>
            @endforeach --}}

        </div>
    </main>
@endsection