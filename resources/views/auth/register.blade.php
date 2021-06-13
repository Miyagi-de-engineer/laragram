@extends('layouts.app')
@include('footer')
@section('content')
<div class="main">
  <div class="card devise-card">
      <div class="form-wrap">
          <div class="form-group text-center">
            <h2 class="logo-img mx-auto"></h2>
            <p class="text-secondary">友達の写真や動画をチェックしよう</p>
          </div>
          <form action="{{ route('register')}}" method="post">
            @csrf

            {{-- email --}}
            <div class="form-group">
                <input type="email" autocomplete="email" name="email" placeholder="メールアドレス" class="form-control" value="{{ old('email') }}">
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            {{-- username --}}
            <div class="form-group">
                <input type="text" name="name" placeholder="ユーザーネーム" value="{{ old('name')}}" required autofocus class="form-control">
            </div>

            {{-- password --}}
            <div class="form-group">
                <input class="form-control" placeholder="パスワード" autocomplete="off" type="password" name="password" required>
            </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

            {{-- password-re --}}
             <div class="form-group">
                <input class="form-control" placeholder="パスワードの確認" autocomplete="off" type="password" name="password_confirmation" required>
            </div>


            <div class="actions">
                <input type="submit" value="登録する" name="commit" class="btn btn-primary w-100">
            </div>

          </form>
          <br>
          <p class="devise-link">
              アカウントをお持ちですか？
              <a href="/users/sign_in">サインインする</a>
          </p>
      </div>
  </div>
</div>
@endsection
