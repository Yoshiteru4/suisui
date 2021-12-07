@extends('layouts.app')

@section('content')

@if (session('error-message'))
  <p>{{ session('error-message') }}</p>
@endif

  <form action="{{ url('/payment') }}" method="post" class="text-center mt-xxl">
    @csrf
    <script
      src="https://checkout.pay.jp/"
      class="payjp-button"
      data-key="pk_test_720a7b7eeb3f7e4927d6e3be"
      data-text="カード情報を入力"
      data-submit-text="カードを登録する"
     ></script>
  </form>

  @if (!empty($cardList))
  <p>もしくは登録済みのカードで支払い</p>
  <form action="{{ route('payment') }}" method="post">
    @csrf
    
    @foreach ($cardList as $card)
      <div class="card-item">
        <label>
          <input type="radio" name="payjp_card_id" value="{{ $card['id'] }}" />
          <span class="brand">{{ $card['brand'] }}</span>
          <span class="number">{{ $card['number'] }}</span>
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

@endsection