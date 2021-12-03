@extends('layouts.form')

@section('title', '決済完了')

<link rel="stylesheet" href="{{ asset('css/payment_finish.css') }}">

@section('top','決済完了')

@section('content')
<h1>＜決済完了＞</h1>
<div class="payment-finish">
    <p>注意事項</p>
    <p>〜時までにお越しください。〜様の滞在時間は〜時〜時です。</p>
</div>

    
@endsection