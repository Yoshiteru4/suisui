@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('登録完了') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('これであなたも『SuiSui Crew』👍') }}<br>
                </div>
            </div>    
        </div>
    </div>
</div>
{{-- <META http-equiv="Refresh" content="3;URL=http://127.0.0.1:8001/"> --}}
@endsection

