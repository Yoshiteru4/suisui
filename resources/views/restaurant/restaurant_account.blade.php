@extends('layouts.app')

@section('content')
    <main>
        <div class="restaurant_account">
            <h2>＜注文状況一覧＞</h2>
            @foreach($orders as $order)
                <p>{{ $order->menu_id }}</p>
            @endforeach
            <h2>＜お店の情報＞</h2>
            <div class="account">
                <h3>お店の名前</h3>
                <h3>メールアドレス</h3>
            </div>
        </div>
    </main>
@endsection