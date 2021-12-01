<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

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
            <P class="text"></P>
        </main>
        <footer>
            <div class="underbar">
                <p class="home"><i class="fas fa-home fa-2x" ></i></p>
                <p class="search"><i class="fas fa-search fa-2x"></i></p>
                <p class="account"><i class="fas fa-user fa-2x"></i></p>
            </div>
        </footer>
    </body>
</html>
