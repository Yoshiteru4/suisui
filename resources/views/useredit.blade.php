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
      <link rel="stylesheet" href="{{ asset('css/useredit.css') }}">
   </head>
   <body>
      <form action ="/user" method="get">
         @csrf
         {{-- @method('put') --}}
         <div class="input">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="text" name="name" value="{{ $user->name }}">
            <input type="text" name="email" value="{{ $user->email }}">
            <input type="submit" value="完了">
         </div>
      </form>
   </body>
   </html>

   @endsection
