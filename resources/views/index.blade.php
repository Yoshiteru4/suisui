<header>
  <h1 class="top">メニュー検索</h1>
</header>


@extends('layouts.defalt')

@section('top','検索ページ')

@section('search','検索をリセット')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@section('content')
<div class="search-condition">
<h1>検索条件を入力してください</h1>
<form action="{{ url('/search')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>料理の名前</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したい料理名を入力してください" name="food">
  </div>
  <div class="form-group">
    <label>値段</label>
    <input type="text" class="form-control col-md-5" placeholder="最低金額を入力してください" name="price" value="{{ old("name")}}">
  </div>
  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</div>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif
<div style="margin-top:50px;">

@if(!empty($message))
<h1>検索結果</h1>
<div class="alert alert-primary" role="alert">{{$message}}</div>
@endif

<h1 class="menu-list">メニューリスト</h1>
@if(isset($menus))
@foreach($menus as $menu)
<div class="menu-wrapper">
    <div class="menu-card">
      <img src="{{ $menu->image_path }}" alt="画像">
      <h4>料理名：{{$menu->food}}</h4>
      <h4>値段：{{$menu->price}}円</h4>
      <h4>店舗名：{{ $menu->restaurant->name }}</h4>
      <input type="submit" value="詳細を見る">
  </div>
</div>

@endforeach
@endif
</div>

@endsection
