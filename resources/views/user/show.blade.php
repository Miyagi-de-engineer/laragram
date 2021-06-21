@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
    <div class="profile-wrap">
        <div class="row">
            <div class="col-md-4 text-center">
                @if ($user->profile_photo)
                    <p>
                        <img class="round-img" src="{{ asset('storage/user_images/'.$user->profile_photo) }}">
                    </p>
                    @else
                    <img class="round-img" src="{{ asset('/images/blank_profile.png') }}">
                @endif
            </div>
            <div class="col-md-8">
                <div class="row">
                    <h1>{{ $user->name }}</h1>
                    @if ($user->id == Auth::user()->id)
                        <a href="/users/edit" class="btn btn-outline-dark common-btn edit-profile-btn">
                            プロフィール編集
                        </a>
                        <a href="{{ route('logout')}}" class="btn btn-outline-dark common-btn edit-profile-btn" rel="nofollow" data-method="POST" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            ログアウト
                        </a>
                        <form action="{{ route('logout')}}" id="logout-form" style="display: none;" method="post">
                            @csrf
                        </form>
                    @endif
                </div>
                <div class="row">
                    <p>
                        {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
