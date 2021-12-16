@extends('layouts.restaurant')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_detail">
            <h2>＜登録情報＞</h2>
            {{-- @foreach ($Restaurantdetails as $Restaurantdetail)
                    <P>お店の名前：{{ $Restaurantdetail->name }}</P>
                    <P>メールアドレス：{{ $Restaurantdetail->email }}</P>
                    <P>パスワード：{{ $Restaurantdetail->password }}</P>
            @endforeach --}}

            <p>お店の名前：{{ $Restaurant->name }}</p>
            <p>メールアドレス：{{ $Restaurant->email }}</p>
            
            
            <h2>＜掲載メニュー＞</h2>
            @foreach($Restaurant->menus as $menu)
            <p>{{ $menu->food }}</p>
            {{-- <p>{{ $menu->price }}</p> --}}
            @endforeach
            <div class="createbox">
                <a class="fog" href="/create">メニューを作成する</a>
                <a href="/restaurant_edit">メニューを編集する</a>
            </div>
            
            
        </div>
    </main>
@endsection