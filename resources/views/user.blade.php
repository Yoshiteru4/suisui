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
            <div class="cardbox">
               <i class="fas fa-credit-card fa-2x card"></i>
               <h2>決済方法</h2>
            </div>
         <form action="{{ route('payment') }}" method="post" class="text-center mt-xxl">
            @csrf
            <script
               src="https://checkout.pay.jp/"
               class="payjp-button"
               data-key="pk_test_720a7b7eeb3f7e4927d6e3be"
               data-text="カード情報を入力"
               data-submit-text="カードを登録する">
            </script>
         </form>
      </div>
   </body>
   </html>
   @endsection
   