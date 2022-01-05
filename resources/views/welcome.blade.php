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
        {{-- <header>
            <h1 class="top">Suisui</h1>
                {{-- @if (Route::has('login'))
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
                    </div>
                @endif --}}
        {{-- </header> --}} 
        <main>
            <div class="title" >
                <h1>ランチマッチングアプリ<br></h1>
                <div class="suisui">
                    <h2 class="text">『 SuiSui 』</h2><br>
                </div>
                <h3>忙しいビジネスパーソンと人気飲食店のランチマッチングプラットフォーム</h3>
            </div>

            <div class="kotira" >
                @if (Route::has('login'))
                    <div class="login">
                        @auth
                            <form action="/logout" method="post">
                                @csrf
                            <input type="submit" value="ログアウト">
                        </form>
                        @else
                            <a class="log" href="{{ route('login') }}" >ログイン</a>
                            @if (Route::has('register'))
                                <a class="sign" href="{{ route('register') }}" >新規登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
                {{-- <p>ログインはこちらから</p> --}}
            </div>
        </main>
    </body>
</html>
