@extends('layouts.restaurant')

@section('content')
    <main>
        <div class="restaurant_orderhistory">
            <h2>＜注文履歴＞</h2>
                @foreach ($R_orderhistories as $R_orderhistory)
                    <P>{{ $R_orderhistory->updated_at}}</P>
                    <P>{{ $R_orderhistory->menu->food}}</P>
                    <P>{{ $R_orderhistory->user->name}}</P>
                    <hr>
                @endforeach
        </div>
    </main>
@endsection