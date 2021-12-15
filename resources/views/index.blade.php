<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>検索ページ</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  {{-- <link rel="stylesheet" href="{{ asset('css/form.css') }}"> --}}
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
      <h1 class="top">検索ページ</h1>
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
  </header>

  <main>
  <div class="reset">
    <a class="reset-btn" href="{{ url('/index')}}">検索をリセット</a>
  </div>
  <div class="search-condition">
    <h1><i class="fas fa-search"> 検索条件を入力してください</i></h1>
    <form action="{{ url('/search')}}" method="post">
      {{ csrf_field()}}
      {{method_field('get')}}
      <div class="form-group1">
        <label>料理名：</label>
        <input type="text" class="form" size="35" placeholder="検索したい料理名を入力してください" name="food">
      </div>
      <div class="form-group2">
        <label>金額　：</label>
        <input type="text" class="form" size="35" placeholder="最低金額を入力してください" name="price" value="{{ old("name")}}">
      </div>
      <div class="btn1">
      <button type="submit" class="search-btn">検索</button>
      </div>
  </div>
    </form>

    @if(session('flash_message'))
    <div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
    @endif
    <div style="margin-top:50px;">
    
    @if(!empty($message))
    <h1 class="search-result">検索結果</h1>
    <div class="search-message"">{{$message}}</div>
    @endif
    
    <h1 class="menu-list">Menu</h1>
  <div class="menubox">
    @if(isset($menus))
    @foreach($menus as $menu)
      <div class="menu">
          <img src="{{ $menu->image_path }}" alt="画像">
          <h4>料理名：{{$menu->food}}</h4>
          <h4>値段：¥{{$menu->price}}</h4>
          <h4>店舗名：{{ $menu->restaurant->name }}</h4>

      <form action="/detail"  method="post">
        @csrf
        <input type="hidden" name="menufood" value="{{$menu->food}}">
         <input type="hidden" name="menuprice" value="{{$menu->price}}">
         <input type="hidden" name="menuimage" value="{{$menu->image_path}}">
         <input type="hidden" name="restaurantname" value="{{$menu->restaurant->name}}">
          <input type="submit" value="注文する" class="order-btn">
      </form>
      </div>
    @endforeach
    @endif
  </div>
  </main>
  <footer>
    <div class="underbar">
        <a class="home" href="/"><i class="fas fa-home fa-2x" ></i></a>
        <a class="search" href="/index"><i class="fas fa-search fa-2x"></i></a>
        <a class="account" href="/user"><i class="fas fa-user fa-2x"></i></a>
    </div>
</footer>
</body>
</html>
