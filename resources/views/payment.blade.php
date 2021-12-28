@extends('layouts.app')

@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

@section('top','詳細選択')

@section('content')

<h1 class="check">＜注文詳細確認＞</h1>
    <div class="order-check">
      <div class="order-table">
        <table border="1" align="center">
           <tr><th>選んだ料理名</th><td>{{$menufood}}</td></tr>
           <tr><th>選んだ店舗名</th><td>{{$restaurantname}}</td></tr>
           <tr><th>個数</th><td>{{$menuQuantity}}個</td></tr>
           <tr><th>人数</th><td>{{$personQuantity}}人</td></tr>
           <tr><th>来店日時</th><td> {{$Comedate}}：{{$ComeTime}}</td></tr>
           <tr><th>メニューID</th><td>{{$menuid}}</td></tr>
           <tr><th>合計金額</th><td>¥{{$totalprice}}</td></tr>     
         </table>
        </div>
    </div>
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
      <div class="order-btn1">
        <input type="submit" value="注文確定し、決済に進む" class="order-btn">
      </div>
    </div>
</form>

@endsection