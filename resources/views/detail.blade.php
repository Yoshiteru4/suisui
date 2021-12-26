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
  <div class="order-table">
    <table border="1" align="center">
       <tr><th>選んだ料理名</th><td>{{$menufood}}</td></tr>
       <tr><th>選んだ店舗名</th><td>{{$restaurantname}}</td></tr>
       <tr><th>選んだメニューの金額</th><td>¥{{$menuprice}}</td></tr>
       <tr><th>個数（必須）</th><td><select class="form" name="menuQuantity">
        <option value="1">1</option>
        @for ($i = 2; $i <= 10; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>個</td></tr>
       <tr><th>来店人数（必須）</th><td><select class="form-control" name="personQuantity">
        <option value="1">1</option>
        @for ($i = 2; $i <= 10; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>人</td></tr>
       <tr><th>来店日時（必須）</th><td><input type="date" id="today" name="Comedate"><input type="time" name="ComeTime" min="08:00" max="22:00" value="08:00"></td></tr>     
     </table>
    </div>
<input type="hidden" name="menuid" value="{{$menuid}}">
<input type="hidden" name="restaurantname" value="{{$restaurantname}}">
<input type="hidden" name="menufood" value="{{$menufood}}">
<input type="hidden" name="menuprice" value="{{$menuprice}}">
<input type="hidden" name="restaurant_id" value="{{$restaurant_id}}">

</div>

</div>


<div class="btn">
<p><button type="button" onClick="history.back()" class="back-btn">戻る</button>
<input type="submit" class="next-btn" value="次に進む"></p>
</div>
</form>
</main>
@endsection

   

