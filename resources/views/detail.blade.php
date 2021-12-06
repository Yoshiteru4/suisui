@extends('layouts.form')

@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@section('top','詳細選択')

@section('content')
<h1>＜詳細選択＞</h1>


<form action="payment_check.blade.php" method="post">
<div class="order-detail">

<div class="order-menu">
<span>選んだメニュー  </span><span><select name="個数">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>個</span><br>
</div>

<div class="quantity">
<span>人数</span><span><select name="人数">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>人</span><br>
</div>

<div class="come-time"></div>
<span>来店日時</span>
<span><input type="date" id="today"><input type="time" name="example" min="08:00" max="22:00" value="08:00"></span>
</div>
</div>

<div class="btn">
<input type="submit" value="次に進む">
</div>
</form>

@endsection

   

