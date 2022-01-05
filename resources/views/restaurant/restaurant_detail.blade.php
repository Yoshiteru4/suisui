@extends('layouts.restaurant')

@section('title', 'アカウント情報')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_detail">
            <h2>＜登録情報＞</h2>

            <p>お店の名前：{{ $Restaurant->name }}</p>
            <p>メールアドレス：{{ $Restaurant->email }}</p>
            
            
            <h2>＜掲載メニュー＞</h2>
            <div class="restaurant">
                @foreach($Restaurant->menus as $menu)
                <div class="restaurantbox">
                    <img src="{{ $menu->image_path }}" alt="画像">
                    <p class="aiueo">料理名：{{ $menu->food }}</p>
                    <p>金額：¥{{$menu->price}}</p>
                </div>
                @endforeach
            </div>
                
            <div class="createbox">
                <a href="/create/{{ $Restaurant->id }}" class="btn btn-gradient"><span>新しいメニューを作成する</span></a>
                <a href="/restaurant_edit" class="btn btn-gradient"><span>登録情報とメニューを編集する</span></a>
            </div>
            
            
        </div>
    </main>
@endsection