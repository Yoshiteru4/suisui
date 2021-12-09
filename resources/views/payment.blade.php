@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
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


<div class="payment-check">
@if (session('error-message'))
  <p>{{ session('error-message') }}</p>
@endif

  <form action="{{ route('payment') }}" method="post" class="text-center mt-xxl">
    @csrf
    <script
      src="https://checkout.pay.jp/"
      class="payjp-button"
      data-key="pk_test_720a7b7eeb3f7e4927d6e3be"
      data-text="カード情報を入力"
      data-submit-text="カードを登録する"
     ></script>
  </form>

  {{-- {{dd($cardList)}} --}}
  @if (!empty($cardList))
    <p>もしくは登録済みのカードで支払い</p>
    <form action="{{ route('payment') }}" method="post">
      @csrf
      
        @foreach ($cardList as $card)
          <div class="card-item">
            <label>
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
        <button type="submit">選択したカードで決済する</button>
      </form>
    @endif

</div>

@endsection