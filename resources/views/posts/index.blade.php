@extends('layouts.app')

@include('navbar')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<a href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    サインアウト <br>
</a>
<form action="{{ route('logout')}}" id="logout-form" method="post" style="display: none;">
    @csrf
</form>

<p>仮のトップページです</p>
<!-- // ==========ここから追加する========== -->
<a href="#" class="btn btn-primary">仮のボタンです</a>
<!-- // ==========ここまで追加する========== -->

@endsection
