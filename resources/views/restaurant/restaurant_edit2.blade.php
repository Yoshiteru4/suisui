@extends('layouts.restaurant')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')

<form action ="/restaurant_update" method="post">
    @csrf
    {{-- @method('PATCH') --}}
    <div class="input">
       <i class="fas fa-user-circle fa-5x human"></i>
       <input type="hidden" name="id" value="{{ $restaurants->id }}">
       <h3>名前</h3>
       <input type="text" name="name" value="{{ $restaurants->name }}">
       <h3>メールアドレス</h3>
       <input type="email" name="email" value="{{ $restaurants->email }}">
       <div class="update-btn">
       <input type="submit" value="完了" class="btn">
      </div>
    </div>
 </form>


@endsection