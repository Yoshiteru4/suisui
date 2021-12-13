<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <title>ホーム画面</title>
    </head>
    <body>
        <header>
            <h1 class="top">Suisui</h1>
                @if (Route::has('login'))
                    <div class="login">
                        @auth
                            <form action="/logout" method="post">
                                @csrf
                            <input type="submit" value="ログアウト">
                        </form>
                        @else
                            <a class="log" href="{{ route('login') }}">ログイン</a>
                            @if (Route::has('register'))
                                <a class="sign" href="{{ route('register') }}">新規登録</a>
                            @endif
                        @endauth
                        <a href="/restaurant_detail" class="new">お店の方はこちら</a>
                    </div>
                @endif
        </header>
        <main>
            <h1 class="homes"><i class="fas fa-home homemark"></i>ホーム</h1>
            <div class="menubox">
                @foreach($menus as $menu)
                <div class="menu">
                    <img src="{{ $menu->image_path }}" alt="画像">
                    <p>商品名：{{ $menu->food }}</p>
                    <p>店舗名：{{ $menu->restaurant->name }}</p>
                    <p>住所:{{ $menu->restaurant->address }}</p>
                    <p>営業時間:{{ $menu->restaurant->lunchhour}}</p>
                    <p>金額：{{ $menu->price }}円</p>
                    </div>
                @endforeach
            </div>
        </main>
        {{-- <footer>
            <div class="underbar">
                <a class="home" href="/"><i class="fas fa-home fa-2x" ></i></a>
                <a class="search" href="/index"><i class="fas fa-search fa-2x"></i></a>
                <a class="account" href="/user"><i class="fas fa-user fa-2x"></i></a>
            </div>
        </footer> --}}
    </body>
</html>
