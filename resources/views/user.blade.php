   @extends('layouts.form')

   @section('title', 'ここに入れたいタイトルを書く')

   @section('top','Suisui')


   @section('content')
   <!DOCTYPE html>
   <html lang="ja">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" href="{{ asset('css/user.css') }}">
   </head>
   <body>
      <div class="user">
         <h2>アカウント情報</h2>
         <h2><a href="/favorite">お気に入り一覧</a></h2>
         <h2>決済方法</h2>
      </div>
   </body>
   </html>
   @endsection