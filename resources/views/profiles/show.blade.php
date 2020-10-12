@extends('layouts.bloglayout')
@section('content')
<div class="profile_banner_wrapper">
    <div class="profile-banner">
        <div class="profile-banner-top"></div>
        <div class="profile-banner-bottom">
            <div class="user-card-wrapper">
                <div class="user-card-top">
                    <div class="user-profile-image">
                        <img src="{{ asset($user->profile->profileImage()) }}">
                    </div>
                    @can('update', $user->profile)
                    <div class="menu-options">
                        <a href="{{ route('profile.edit', ['user' => $user->id]) }}">
                            <img src="{{ asset('/images/edit-property.png') }}"
                                 alt="Edit Profile" title="Edit Profile">
                        </a>
                        <a href="{{ route('post.create', ['user' => $user->id]) }}">
                            <img src="{{ asset('/images/add-image.png') }}"
                                 alt="Add New Post" title="Add New Post">
                        </a>
                            <img src="{{ asset('/images/cross-mark.png') }}"
                                 alt="Delete Profile" title="Delete Profile"
                                 class="profile_delete_btn" id="{{ $user->id }}">
                    </div>
                    @endcan
                </div>
                <div class="user-card-bottom">
                    <div class="user-data">
                        <div class="user-data-credentials">
                            <a href="">{{ $user->profile->url ?? "" }}</a>
                            <h6>{{ $user->profile->title ?? "" }}</h6>
                            <div class="user-media">
                                <a href="">Posts <strong>{{ $user->posts->count() }}</strong></a>
                                <a href="">Followers <strong id="followers">
                                        {{ $user->followers->count() }}</strong>
                                </a>
                                <a href="">Following <strong id="following">
                                        {{ $user->following->count() }}</strong>
                                </a>
                            </div>
                            @if(auth()->user())
                                @if(auth()->user()->profile->id != $user->id)
                                    <div class="follow-button">
                                        <button id="followBtn" data-user-id="{{ $user->id }}"
                                                onclick="followUser(event)">
                                            Follow
                                        </button>
                                    </div>
                                @else
                                <div class="profile-url">
                                    <a href="{{ route('post.index') }}">
                                        <strong>My Followings</strong>
                                    </a>
                                </div>
                                @endif
                            @else
                            <div class="profile-url">
                                <a href=""><strong>{{ $user->profile->description ?? 'N/A' }}</strong></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="posts-wrapper">
        <div class="posts-banner">
            @foreach($user->posts as $post)
                <div class="post-wrapper">
                    <a href="{{ route('post.show', ['post' => $post->id]) }}">
                        <img src="{{ asset("/storage/$post->image") }}" class="w-100">
                    </a>
                    <div class="cross_mark">
                        <img src="{{ asset('/images/cross-mark.png') }}" alt=""
                             class="delete_post_btn" id="{{ $post->id }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/follow-button.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush
@endsection

