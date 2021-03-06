@extends('layouts.restaurant')

@section('title', 'メニュー情報編集')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')

<main>
    <div class="restaurant_edit">
        <i class="fas fa-store-alt size"></i>
        <h2>＜お店の登録情報＞</h2>
 <p>お店の名前：{{$restaurants->name}}</p>
 <p>E-mail：{{$restaurants->email}}</p>

 <div class="edit">
    <div class="edit-btn">
       <form action="/restaurant/{{ $restaurants->id }}/edit" method="get">
          <input type="submit" value="編集" class="edit-btn2">
       </form>
    </div>
 </div>

        <h2>＜掲載メニュー＞</h2>
    <form action="/menu/{{$restaurants->id}}/delete" method="post">
        @method('DELETE')
        <div class="restaurant">
        @foreach ($restaurants->menus as $menu)
        @csrf
            <div class="restaurantbox">
                <p class="aiueo">{{$menu->food}}</p>
                <img src="{{ $menu->image_path }}" alt="画像">
                <p>¥{{$menu->price}}</p>
                <input type="hidden" name="id" value="{{ $menu->id }}">
            <div class="d-btn">
                <input type="submit" value="削除する" class="delete-btn">
            </div> 
        </div>
        @endforeach
    </form>
    </div>
</main>
@endsection