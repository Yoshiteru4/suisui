@extends('layouts.form')

@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@section('top','詳細選択')

@section('content')
<h1>＜詳細選択＞</h1>

<div class="order-detail">
<span>選んだメニュー  </span><span>--個</span><br>
<span>人数</span><span>--個</span><br>
<span>来店日時</span><span>ー月 ー 日ー 時 ー 分</span>
</div>
@endsection

   

