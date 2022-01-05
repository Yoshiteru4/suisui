@extends('layouts.app')

   @section('title', 'ここに入れたいタイトルを書く')

   <link rel="stylesheet" href="{{ asset('css/favorite.css') }}">

   @section('top','Suisui')


   @section('content')
   
<div>
      <h1><i class="far fa-heart  hurt"></i>お気に入り一覧</h1>
   <div class="snow">●</div> 
   <div class="favoritebox">
         @foreach($favorites as $favorite)
      <div class="favorite">
                  <img src="{{ $favorite->menu->image_path }}" alt="画像">
         <div class="order-table">
            <table border="1" align="center">
               <tr><th>料理名</th><td>{{ $favorite->menu->food }}</td></tr>
               <tr><th>店舗名</th><td>{{ $favorite->menu->restaurant->name }}</td></tr>
               <tr><th>ランチタイム</th><td>11:00~13:00</td></tr>
               <tr><th>金額</th><td>¥{{$favorite->menu->price}}</td></tr>
            </table>
               <form action="/detail" method="post">
                  @csrf
                  <input type="hidden" name="menuid" value="{{$favorite->menu->id}}">
                  <input type="hidden" name="menufood" value="{{$favorite->menu->food}}">
                  <input type="hidden" name="menuprice" value="{{$favorite->menu->price}}">
                  <input type="hidden" name="menuimage" value="{{$favorite->menu->image_path}}">         
                  <input type="hidden" name="restaurantname" value="{{$favorite->menu->restaurant->name}}">
                  <div class="order-btn1">
                     <input type="submit"  class="order-btn" value="注文する">
                  </div>
               </form>
         </div>
      </div>
         @endforeach
   </div> 
</div>
   <div class="paginate">{{ $favorites->links('vendor.pagination.semantic-ui') }}</div>
   @endsection