@extends('layouts.app')

@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@section('top','詳細選択')

@section('content')
<main>
<h1>＜{{$users}}様の詳細選択＞</h1>


<form action="/payments" method="post">
  @csrf
<div class="order-detail">
    <div class="image"><img src="{{$menuimage}}" alt=""></div>
<div class="order-menu">
<h4>選んだメニューの店舗名:{{$restaurantname}}</h4><br>
<h4>選んだメニュー: {{$menufood}}</h4><br>
<span>選んだメニューの金額: ¥{{$menuprice}}</span><span><br>
<input type="hidden" name="menuid" value="{{$menuid}}">
<input type="hidden" name="restaurantname" value="{{$restaurantname}}">
<input type="hidden" name="menufood" value="{{$menufood}}">
<input type="hidden" name="menuprice" value="{{$menuprice}}">

  <p>メニューの個数：<select class="form" name="menuQuantity">
    <option value="1">1</option>
    @for ($i = 2; $i <= 10; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>個</p>
<p>来店人数：<select class="form-control" name="personQuantity">
  <option value="1">1</option>
  @for ($i = 2; $i <= 10; $i++)
      <option value="{{ $i }}">{{ $i }}</option>
  @endfor
</select>人</p>
<p>来店日時:<input type="date" id="today" name="Comedate"><input type="time" name="ComeTime" min="08:00" max="22:00" value="08:00"></p>
</div>

</div>


<div class="btn">
<p><button type="button" onClick="history.back()" class="back-btn">戻る</button>
<input type="submit" class="next-btn" value="次に進む"></p>
</div>
</form>
</main>
@endsection

   

