@extends('layouts.app')

   @section('title', 'ここに入れたいタイトルを書く')

   @section('top','Suisui')


   @section('content')

   <form action="/menu_list" method="POST" enctype="multipart/form-data">
      {{csrf_field()}} 
      <div class="form-group">
         <label>商品名</label>
            <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="food">
         </div>
         <div class="form-group">
            <label>料金</label>
            <input type="number" name="price" id="price">
         </div>
         <div class="form-group">
            <label for="image">画像</label>
            <input type="file" class="form-control-file" id="image" name="image">
         </div>
         <button type="submit" class="btn btn-primary">作成する</button>
   </form>

@endsection