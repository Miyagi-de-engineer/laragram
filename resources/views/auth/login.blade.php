@extends('layouts.app')

@include('footer')
@section('content')
    <div class="main">
        <div class="card devise-card">
            <div class="form-wrap">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto"></h2>
                </div>
                <form action="{{ route('login')}}" method="POST" accept-charset="UTF-8" id="new_user" class="new_user">
                    @csrf
                    {{-- email --}}
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
                    </div>
                    {{-- pass --}}
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="パスワード" required class="form-control">
                    </div>
                    {{-- btn --}}
                    <div class="actions">
                        <input type="submit" value="サインインする" name="commit" class="btn btn-primary w-100">
                    </div>
                </form>
                <br>
                <p class="devise-link">
                    アカウントをお持ちでないですか？
                    <a href="{{ route('register')}}">登録する</a>
                </p>
            </div>
        </div>
    </div>
@endsection
