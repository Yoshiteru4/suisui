@extends('layouts.app')

   @section('title', 'ここに入れたいタイトルを書く')

   <link rel="stylesheet" href="{{ asset('css/favorite.css') }}">

   @section('top','Suisui')


   @section('content')
   
   <div>
      <h1><i class="far fa-heart  hurt"></i>あなたのお気に入り一覧</h1>
      <div class="snow">●</div> 
      <div class="favoritebox">
         @foreach($favorites as $favorite)
               <div class="favorite">
                  <img src="{{ $favorite->menu->image_path }}" alt="画像">
                  <p>商品名：{{ $favorite->menu->food }}</p>
                  <p>店舗名：{{ $favorite->menu->restaurant->name }}</p>
               </div>
         @endforeach
         
      </div> 
   </div>
   <div class="paginate">{{ $favorites->links('vendor.pagination.semantic-ui') }}</div>
   @endsection