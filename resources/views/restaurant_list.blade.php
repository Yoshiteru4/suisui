<header>
    <h1 class="top">店舗一覧</h1>
</header>

{{-- <link rel="stylesheet" href="{{ asset('css/restaurant_list.css') }}"> --}}
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href=""{{ asset ('css') }}">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

@extends('layouts.defalt')

@section('title', '店舗一覧')

<link rel="stylesheet" href="{{ asset('css/restaurant_list_finish.css') }}">

@section('top','店舗一覧')

@section('content')
<h1>＜店舗一覧＞</h1>
    <table class="table">
        <tr>
          <th>店舗名</th>
          <th>住所</th>
          <th>営業時間</th>
        </tr>
        @foreach ($restaurants as $restaurant)
          <tr>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->address}}</td>
            <td>{{$restaurant->lunchhour}}</td>
          </tr>
          @endforeach
    </table>

    
@endsection