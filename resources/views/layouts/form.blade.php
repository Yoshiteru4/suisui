<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href=""{{ asset ('css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="top">@yield('top')</h1>  
        <form action="/logout" method="post">
            @csrf
        <input type="submit" value="ログアウト">  
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="underbar">
            <a class="home" href="/welcome"><i class="fas fa-home fa-2x" ></i></a>
            <a class="search" href="/search"><i class="fas fa-search fa-2x"></i></a>
            <a class="account" href="/user"><i class="fas fa-user fa-2x"></i></a>
        </div>
    </footer>
</body>
</html>