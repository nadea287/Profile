@extends('layouts.bloglayout')
@section('content')
  <div class="following-posts-banner">
     <div class="following-cred">
             <div class="followings-posts-wrapper">
                 @foreach($posts as $post)
                     <div class="following-post">
                         <img src="{{ asset("/storage/$post->image") }}" alt="">
                         <h2>{{ $post->user->name }}</h2>
                     </div>
                 @endforeach
             </div>
         <div class="users-list">
             <h1>All Users</h1>
             @foreach($users as $user)
                 <div class="followings_data">
                     <img src="{{ asset($user->profile->photo()) }}" alt="">
                     <a href="{{ url("/profile/$user->id") }}">{{ $user->name }}</a>
                 </div>
             @endforeach
         </div>
     </div>
  </div>
@endsection
