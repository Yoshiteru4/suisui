   @extends('layouts.form')

   @section('title', 'アカウント編集ページ')

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
            <h2>＜アカウント情報＞</h2>
            <div class="account">
               <h3>名前</h3>
               <p>・{{ $user->name }}</p>
               <h3>メールアドレス</h3>
               <p>・{{ $user->email }}</p>
               <div class="edit">
                  <div class="edit-btn">
                     <form action="/user/{{ $user->id }}/edit" method="get">
                        <input type="submit" value="編集" class="btn">
                     </form>
                  </div>
               </div>
            </div>
            <h2><a href="/favorite" class="favorite">お気に入り一覧</a></h2>
            <h2>決済方法</h2>
         <form action="{{ route('payment') }}" method="post" class="text-center mt-xxl">
            @csrf
            <script
               src="https://checkout.pay.jp/"
               class="payjp-button"
               data-key="pk_test_720a7b7eeb3f7e4927d6e3be"
               data-text="カード情報を入力"
               data-submit-text="カードを登録する"
                ></script>
         </form>
      </div>
   </body>
   </html>
   @endsection
   