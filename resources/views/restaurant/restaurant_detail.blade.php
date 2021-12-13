@extends('layouts.restaurant')

@section('content')
    <main>
        <div class="restaurant_detail">
            <h2>＜お店の情報＞</h2><編集ボタン></h3>
            @foreach ($Restaurantdetails as $Restaurantdetail)
                    <P>お店の名前：{{ $Restaurantdetail->name }}</P>
                    <P>メールアドレス：{{ $Restaurantdetail->email }}</P>
                    <P>パスワード：{{ $Restaurantdetail->password }}</P>
            @endforeach
            </div>
            <h2>＜掲載メニュー＞</h2>
            
        </div>
    </main>
@endsection