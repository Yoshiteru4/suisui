   @extends('layouts.app')

   @section('title', 'アカウント情報')

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
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   </head>
   <body>
      <div class="user">
         <i class="fas fa-user-circle fa-5x human"></i>
            <h2>アカウント情報</h2>
            <div class="account">
               <h3>名前</h3>
               <p>・{{ $user->name }}</p>
               <h3>メールアドレス</h3>
               <p>・{{ $user->email }}</p>
               <div class="edit">
                  <div class="edit-btn">
                     <form action="/user/{{ $user->id }}/edit" method="get">
                        <input type="submit" value="編集" class="edit-btn2">
                     </form>
                  </div>
               </div>
      </div>

            <div class="favoritebox">
               <i class="fas fa-heart fa-2x hurt"></i>
               <h2><a href="/favorite" class="favorite">お気に入り一覧</a></h2>
            </div>
            
            <div class="orderbox">
               <i class="fas fa-book-open fa-2x book"></i>
               <h2><a href="/user_orderhistory">注文履歴を見る</a></h2>
            </div>
               
            
      </div>
   </body>
   </html>
   @endsection
   