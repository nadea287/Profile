{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-3 pt-4">--}}
{{--            <img src="{{ asset($user->profile->profileImage()) }}"--}}
{{--                 alt="" class="rounded-circle w-100">--}}
{{--        </div>--}}
{{--        <div class="col-9 pt-4">--}}
{{--            <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                <h1>{{ $user->username }}</h1>--}}
{{--                <div>--}}
{{--                    @can('update', $user->profile)--}}
{{--                    <a href="{{ route('post.create') }}" type="submit" class="btn btn-dark btn-sm">Add Post</a>--}}
{{--                    @endcan--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pb-3">--}}
{{--                @can('update', $user->profile)--}}
{{--                    <a href="{{ route('profile.edit', ['user' => $user->id]) }}">Edit Profile</a>--}}
{{--                @endcan--}}
{{--            </div>--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="mr-3"><strong>{{ $user->posts->count() }}</strong> posts</div>--}}
{{--                    <div class="mr-3"><strong>23k</strong> followers</div>--}}
{{--                    <div class="mr-3"><strong>15k</strong> following</div>--}}
{{--                </div>--}}
{{--                <div class="pt-3 font-weight-bold">{{ $user->profile->title ?? "" }}</div>--}}
{{--                <div>{{ $user->profile->description ?? "" }}</div>--}}
{{--                <div><a href="#">{{ $user->profile->url ?? "" }}</a></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row pt-5">--}}
{{--        @foreach($user->posts as $post)--}}
{{--        <div class="col-4">--}}
{{--            <a href="{{ route('post.show', ['post' => $post->id]) }}">--}}
{{--                <img src="{{ asset("/storage/$post->image") }}" class="w-100">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


{{--__________________________________________________-----}}



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
                                <a href="">Followers <strong id="followers">{{ $user->followers->count() }}</strong></a>
                                <a href="">Following <strong id="following">{{ $user->following->count() }}</strong></a>
                            </div>
                            @if(auth()->user())
                                @if(auth()->user()->profile->id != $user->id)
                                    {{--@can('update', $user->profile)--}}
                                    <div class="follow-button">
                                        <button id="followBtn" data-user-id="{{ $user->id }}"
                                                onclick="followUser(event)">
                                            Follow
                                        </button>
                                    </div>
{{--                             @endcan--}}
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
                        <img src="{{ asset('/images/cross-mark.png') }}" alt="" class="delete_post_btn" id="{{ $post->id }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@push('scripts')
    <script src="{{ asset('js/follow-button.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
@endpush
@endsection

