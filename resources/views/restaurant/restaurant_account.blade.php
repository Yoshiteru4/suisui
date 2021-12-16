@extends('layouts.restaurant')
<link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@section('content')
    <main>
        <div class="restaurant_account">
            <h2>＜注文状況一覧＞</h2>
            {{-- @foreach($todayorders as $todayorder)
                <p>{{ $todayorder->menu->name }}</p> --}}
            {{-- @endforeach --}}

        </div>
    </main>
@endsection