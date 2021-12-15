@extends('layouts.app')

@section('title', '決済完了')

<link rel="stylesheet" href="{{ asset('css/payment_finish.css') }}">

@section('top','決済完了')

@section('content')
<h1>＜決済完了＞</h1>
<div class="payment-finish">
    <h2>注意事項</h2>
    <h3>{{$users}}様<br>ご予約ありがとうございました！<br>予約された来店日時の3分前までにはお越しください。</h3>
</div>

    
@endsection