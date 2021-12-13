@extends('layouts.form')

@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@section('top','詳細選択')

@section('content')
<h1>＜詳細選択＞</h1>


<form action="/payments" method="post">
  @csrf
<div class="order-detail">

<div class="order-menu">
<span>選んだメニュー  </span><span>
  <select class="form" name="menuQuantity">
    <option value="1">1</option>
    @for ($i = 2; $i <= 10; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>個
</div>

<div class="quantity">
<span>人数：</span>
  <select class="form-control" name="personQuantity">
    <option value="1">1</option>
    @for ($i = 2; $i <= 10; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
</select>人
</div>

<div class="come-time"></div>
<span>来店日時</span>
<span><input type="date" id="today" name="Comedate"><input type="time" name="ComeTime" min="08:00" max="22:00" value="08:00"></span>
</div>
</div>

<div class="btn">
<input type="submit" value="次に進む">
</div>
</form>

@endsection

   

