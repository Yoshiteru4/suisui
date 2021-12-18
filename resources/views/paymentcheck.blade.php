@extends('layouts.app')


@section('title', '詳細確認')

<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
    
@section('top','詳細選択')

@section('content')

<div class="message">
{{-- <h1>{{$user}}様</h1> --}}
<h2>ご注文ありがとうございます！<br> 下記のクレジットカードより事前決済にお進みください！</h2>
<h3>{{$users}}様の注文金額：¥{{$totalprice}}</h3>
</div>

<h2 class="test-code">テストコード：4242424242424242</h2>

<div class="payment-check">
     @if (session('error-message'))
      <p>{{ session('error-message') }}</p>
    @endif  

    <form action="payment_check" method="post">
        @csrf
        <input type="hidden" name="totalprice" value="{{$totalprice}}">
        <script
          src="https://checkout.pay.jp/"
          class="payjp-button"
          data-key="{{ config('services.payjp.public_key') }}"
          data-text="カード情報を入力し、決済する"
          data-submit-text="決済する"
         ></script>
        {{-- {{ dd(config('services.payjp.public_key')) }} --}}
    </form>
    
      {{-- {{dd($cardData)}} --}}
      @if (!empty($cardList))
        <p>もしくは登録済みのカードで支払い</p>
        <form action="/payment" method="post">
          @csrf
            @foreach ($cardList as $card)
              <div class="card-item">
                <label>
                  <input type="hidden" name="totalprice" value="{{$totalprice}}">
                  <input type="radio" name="payjp_card_id" value="{{ $card['id'] }}" />
                  <span class="brand">{{ $card['brand'] }}</span>
                  <span class="number">{{ $card['cardNumber'] }}</span>
                </label>
                <div>
                  <p>名義: {{ $card['name'] }}</p>
                  <p>期限: {{ $card['exp_year'] }}/{{ $card['exp_month'] }}</p>
                </div>
              </div>
            @endforeach
            <div class="btn2">
              <button type="submit" class="button1">注文確定</button>
            </div>
          </form>
        @endif
          
    </div>

    @endsection