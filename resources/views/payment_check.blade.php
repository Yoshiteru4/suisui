@extends('layouts.form')

@section('title', '決済確認')

<link rel="stylesheet" href="{{ asset('css/payment_check.css') }}">

@section('top','決済確認')
@section('content')
<h1>＜注文詳細確認＞</h1>

<form action="payment_finish.blade.php" method="post">
    <div class="order-check">
        <span>選んだメニュー  </span><span>--個</span><br>
        <span>人数</span><span>--個</span><br>
        <span>来店日時</span><span>ー月 ー 日ー 時 ー 分</span>
    </div>
    <div class="order-amount">
        <span>合計金額</span><span>--円</span>
    </div>
    <div class="btn">
    <input type="submit" value="注文確定">
</form>
</div>
@endsection

    