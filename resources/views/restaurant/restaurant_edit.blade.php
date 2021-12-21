@extends('layouts.restaurant')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')

<main>
    <div class="restaurant_edit">
        <h2>＜お店の登録情報＞</h2>
 {{-- @foreach ($restaurants as $restaurant) --}}
 <p>お店の名前：{{$restaurants->name}}</p>
 <p>E-mail：{{$restaurants->email}}</p>

 <div class="edit">
    <div class="edit-btn">
       <form action="/restaurant/{{ $restaurants->id }}/edit" method="get">
          <input type="submit" value="編集" class="btn">
       </form>
    </div>
 </div>

 {{-- @endforeach --}}

        <h2>＜掲載メニュー＞</h2>
        
    </div>
</main>
@endsection