@extends('layouts.restaurant')

@section('title', '登録情報編集')

<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')

<form action ="/restaurant_update" method="post">
    @csrf
    {{-- @method('PATCH') --}}
    <div class="input">
      <i class="fas fa-store-alt size"></i>
       <input type="hidden" name="id" value="{{ $restaurants->id }}">
       <h3>名前</h3>
       <input type="text" name="name" value="{{ $restaurants->name }}">
       <h3>メールアドレス</h3>
       <input type="email" name="email" value="{{ $restaurants->email }}">
       <div class="update-btn">
       <input type="submit" value="完了" class="update-btn2">
      </div>
    </div>
 </form>


@endsection