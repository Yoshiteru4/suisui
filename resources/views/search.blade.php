@extends('layouts.defalt')

@section('content')
<div style="margin-top:100px;">
<h1>検索結果</h1>
@if(!empty($message))
<div class="alert alert-primary" role="alert">{{$message}}</div>
@endif
@if(isset($menus))
<table class="table">
  <tr>
    <th>料理名</th>
    <th>値段</th>
  </tr>
  @foreach($menus as $menu)
    <tr>
      <td>{{$menu->food}}</td>
      <td>{{$menu->price}}円</td>
    </tr>
  @endforeach
</table>
@endif
</div>
@endsection