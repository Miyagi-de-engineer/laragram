@extends('layouts.app')
@include('navbar')
@include('footer')
@include('common.errors')

@section('content')
    <div class="col-md-offset-2 mb-4 edit-profile-wrapper">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="profile-form-wrap">
                    <form class="edit_user" action="/users/update" enctype="multipart/form-data"  accept-charset="UTF-8" method="POST" >
                        <input type="hidden" name="utf8" value="&#x2713;">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        @csrf

                        <div class="form-group">
                            <label for="user_profile_photo">プロフィール写真</label><br>
                            @if ($user->profile_photo)
                                <p>
                                    <img src="{{ asset('storage/user_images/'.$user->profile_photo)}}" alt="avatar">
                                </p>
                            @endif
                            <input type="file" name="user_profile_photo" id="user_profile_photo" value="{{ old('user_profile_photo',$user->id) }}" accept="image/jpeg,image/gif,image/png">
                        </div>

                        {{-- name --}}
                        <div class="form-group">
                            <label for="user_name">名前</label>
                            <input type="text" autofocus='autofocus' class="form-control" value="{{ old('user_name',$user->name) }}" name="user_name" id="user_name">
                        </div>
                        {{-- email --}}
                        <div class="form-group">
                            <label for="user_email">メールアドレス</label>
                            <input type="email" autofocus='autofocus' class="form-control" value="{{ old('user_email',$user->email) }}" name="user_email" id="user_email">
                        </div>
                        {{-- password --}}
                        <div class="form-group">
                            <label for="user_password">パスワード</label>
                            <input type="password" autofocus='autofocus' class="form-control" value="{{ old('user_password',$user->password) }}" name="user_password" id="user_password">
                        </div>
                        {{-- password_re --}}
                        <div class="form-group">
                            <label for="user_password_confirmation">パスワードの確認</label>
                            <input type="password" autofocus='autofocus' class="form-control" name="user_password_confirmation" id="user_password_confirmation">
                        </div>

                        <input type="submit" value="変更する" name="commit" class="btn btn-primary" data-disable-with="変更する">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
