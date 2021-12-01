<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    </head>
    <body>
        <header>
            <h1 class="top">Suisui</h1>
                @if (Route::has('login'))
                    <div class="login">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">新規登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </header>
        <main>

        </main>
        <footer>
            <div class="underbar">
                <p class="home">ホーム</p>
                <p class="search">検索</p>
                <p class="account">アカウント</p>
            </div>
        </footer>
    </body>
</html>
