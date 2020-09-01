@extends('layouts.header')

@section('content')
{{--<div class="row justify-content-center">--}}
{{--    <div class="col-3">--}}
{{--        <img src="{{ asset("/storage/$post->image")}}" alt="" class="w-100">--}}
{{--    </div>--}}
{{--    <div class="col-1 justify-content-end">--}}
{{--        <img src="{{ asset($post->user->profile->profileImage()) }}" alt="" class="w-75 rounded-circle offset-6">--}}
{{--    </div>--}}
{{--    <div class="col-2 ml-4">--}}
{{--        <div class="row">--}}
{{--            <a href="{{ url('/profile/'.$post->user->id) }}">--}}
{{--                <strong class="text-dark">{{ $post->user->username }}</strong>--}}
{{--                <a href=""><strong class="ml-4">Follow</strong></a>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <p>{{ $post->caption }}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


    <div class="show-post-wrapper">
        <div>
            <img src="{{ asset('/images/back-arrow.png') }}" alt="">
        </div>
        <div class="show-post-banner">
            <div class="show-single-post">
                <img src="{{ asset("/storage/$post->image")}}" alt="" class="w-100">
            </div>
            <div class="show-post-right">
                <div class="show-post-data">
                    <div class="show-post-cred">
                        <img src="{{ asset($post->user->profile->profileImage()) }}" alt="" class="w-75">
                        <div class="show-post-description">
                            <a href="{{ url('/profile/'.$post->user->id) }}">
                                <h4>{{ $post->user->username }}</h4>
                                <a href=""><button>Follow</button></a>
                            </a>
                        </div>
                    </div>
                    <div class="post-caption">{{ $post->caption }}</div>
                </div>
                <div class="post-comment-section">
                    <form action="{{ route('comment.store', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="body" placeholder="Enter your comment" >
                        <button type="submit">
                            <img src="{{ asset('/images/send-icon.png') }}" alt="">
                        </button>
                    </form>
                    @error('body')
                        <strong style="margin-left: 7px; color: red">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="post-comments-display">
                    <div class="comment-banner">
                        @foreach($post->comments as $comment)
                            <h4><strong>{{ $comment->user->name }}</strong></h4>
                            <span>{{ $comment->body }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
