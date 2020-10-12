@extends('layouts.bloglayout')
@section('content')
    <div class="show-post-wrapper">
        <div>
            <a href="{{ url('/profile/' . $post->user->id) }}">
                <img src="{{ asset('/images/back-arrow.png') }}" class="arrow-back">
            </a>
        </div>
        <div class="show-post-banner">
            <div class="show-single-post">
                <img src="{{ asset("/storage/$post->image")}}" alt="" class="w-100">
            </div>
            <div class="show-post-right">
                <div class="show-post-data">
                    <div class="show-post-cred">
                        <img src="{{ asset($post->user->profile->profileImage()) }}" class="w-75">
                        <div class="show-post-description">
                            <a href="{{ url('/profile/'.$post->user->id) }}">
                            <h4>{{ $post->user->username }}</h4></a>
                            <span class="add-post-time">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="post-caption">{{ $post->caption }}</div>
                </div>
                <div class="post-comment-section">
                    <form action="{{ route('comment.store', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="body" placeholder="Enter your comment">
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
                           <div class="single_comment">
                               <div class="comment-actions">
                                   <div class="comment_edit" data-id="{{ $comment->id }}">
                                       <div class="comment_edit_icon">
                                           <h4><strong>{{ $comment->user->name }}</strong></h4>
                                           @can('update', $comment)
                                               <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                               <span class="fa fa-times delete_comment"
                                                     aria-hidden="true" id="{{ $comment->id }}"></span>
                                           @endcan
                                       </div>
                                   </div>
                                   <div class="comment_body">
                                       <span>{{ $comment->body }}</span>
                                   </div>
                               </div>
                               <div class="posted-time">
                                   {{ ($comment->hasBeenUpdated()) }}
                               </div>
                           </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('scripts')
<script src="{{ asset('/js/post-comment.js') }}"></script>
<script src="{{ asset('/js/delete.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush
@endsection
