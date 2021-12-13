@extends('layouts.restaurant')

@section('content')
    <main>
        <div class="restaurant_account">
            <h2><本日の注文状況＞</h2>
            @foreach ($orderlists as $orderlist)
                <P>{{ $orderlists }}</P>
            @endforeach
        </div>
    </main>
@endsection