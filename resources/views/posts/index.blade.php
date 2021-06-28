@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
    @foreach ($posts as $post)
        <div class="col-md-8 col-md-2 mx-auto">
            <div class="card-wrap">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <a href="/users/{{ $post->user->id }}" class="no-text-decoration">
                            @if ($post->user->profile_photo)
                                <img src="{{ asset('storage/user_images/'.$post->user->profile_photo)}}" alt="" class="post-profile-icon round-img">
                            @else
                                <img src="{{ asset('/images/blank_profile.png')}}" alt="" class="post-profile0icon round-img">
                            @endif
                        </a>
                        <a href="/users/{{ $post->user->id }}" title="{{ $post->user->name }}" class="black-color no-text-decoration">
                            <strong>{{ $post->user->name }}</strong>
                        </a>
                    </div>

                    <a href="/users/{{ $post->user->id}}" class="">
                        <img src="/storage/post_images/{{ $post->id }}.jpg" alt="" class="card-img-top">
                    </a>

                </div>
            </div>
        </div>
    @endforeach

@endsection
