<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>
<body>

    <header>
        <h1 class="top">SuiSui</h1>
            @if (Route::has('login'))
                <div class="login">
                    @auth
                    <form action="/logout" method="post">
                        @csrf
                    <input type="submit" value="ログアウト">
                    @else
                        <a class="log" href="{{ route('login') }}">ログイン</a>
                        @if (Route::has('register'))
                            <a class="sign" href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="underbar">
            <a class="home" href="/welcome"><i class="fas fa-home fa-2x" ></i></a>
            <a class="search" href="/index"><i class="fas fa-search fa-2x"></i></a>
            <a class="account" href="/user"><i class="fas fa-user fa-2x"></i></a>
        </div>
    </footer>
</body>
</html>
