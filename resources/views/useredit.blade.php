@extends('layouts.app')

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
      <link rel="stylesheet" href="{{ asset('css/useredit.css') }}">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   </head>
   <body>
      <form action ="/user" method="post">
         @csrf
         @method('put')
         <div class="input">
            <i class="fas fa-user-circle fa-5x human"></i>
            <input type="hidden" name="id" value="{{ $user->id }}">
            <h3>名前</h3>
            <input type="text" name="name" value="{{ $user->name }}">
            <h3>メールアドレス</h3>
            <input type="email" name="email" value="{{ $user->email }}">
            {{-- <h3>電話番号</h3> --}}
            {{-- <input type="tel" name="" id="" value=""> --}}
            {{-- <h4>パスワード</h4> --}}
            {{-- <input type="text" name="password'" value="{{ $user->password }}"> --}}
            <input type="submit" value="完了" class="btn">
         </div>
      </form>
   </body>
   </html>

   @endsection
