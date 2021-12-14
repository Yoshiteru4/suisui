@extends('layouts.app')

@section('title', '決済完了')

<link rel="stylesheet" href="{{ asset('css/payment_finish.css') }}">

@section('top','決済完了')

@section('content')
<h1>＜決済完了＞</h1>
<div class="payment-finish">
    <h2>注意事項</h2>
    <h3>〜時までにお越しください。{{$users}}様の滞在時間は〜時〜時です。</h3>
</div>

    
@endsection