@extends('layouts.restaurant')

@section('content')
    <main>
        <div class="restaurant_detail">
            <h2>＜登録情報＞</h2>
            {{-- @foreach ($Restaurantdetails as $Restaurantdetail)
                    <P>お店の名前：{{ $Restaurantdetail->name }}</P>
                    <P>メールアドレス：{{ $Restaurantdetail->email }}</P>
                    <P>パスワード：{{ $Restaurantdetail->password }}</P>
            @endforeach --}}

            <p>お店の名前：{{ $Restaurant->name }}</p>
            <p>メールアドレス：{{ $Restaurant->email }}</p>
            
            <h2>＜掲載メニュー＞</h2>
            <p>{{ $Restaurant->menu->food}}</p>
            
        </div>
    </main>
@endsection