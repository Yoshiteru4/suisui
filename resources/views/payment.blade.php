@extends('layouts.app')

@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

@section('top','詳細選択')

@section('content')

<h1 class="check">＜注文詳細確認＞</h1>
    <div class="order-check">
      <p>店舗名:{{$restaurantname}}</p>
       <p>選んだメニュー{{$menufood}}{{$menuQuantity}}個</p>   
       <p>人数{{$personQuantity}}人</p>  
      <p>来店日時{{$Comedate}}：{{$ComeTime}}</p>
    </div>
    <div class="order-amount">
      <p>合計金額:¥ {{$totalprice}}</p>
    </div>
    <p>{{$menuid}}</p>
    <div class="btn">
      <button type="button" onClick="history.back()" class="button">戻る</button>

  <form action="/order_finish" method="post">
    @csrf
      <input type="hidden" name="menuid" value="{{$menuid}}">
      <input type="hidden" name="menufood" value="{{$menufood}}">
      <input type="hidden" name="menuQuantity" value="{{$menuQuantity}}">
      <input type="hidden" name="personQuantity" value="{{$personQuantity}}">
      <input type="hidden" name="Comedate" value="{{$Comedate}}">
      <input type="hidden" name="ComeTime" value="{{$ComeTime}}">
      <input type="hidden" name="totalprice" value="{{$totalprice}}">
      <input type="submit" value="注文確定し、決済に進む" class="order-btn">
    </div>
</form>

@endsection