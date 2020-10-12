@extends('layouts.bloglayout')
@section('content')
    <div class="edit_form_page_wrapper">
        <div class="profile-edit-card">
            <div class="profile-edit-card-top">
                <ul class="breadcrumbs">
                    <li class="li breadcrumbs_item">
                        <a href="{{ url("/profile/$user->id") }}" class="breadcrumbs-link">My Profile</a>
                    </li>
                    <li class="breadcrumbs_item">
                        <a href="" class="breadcrumbs-link breadcrumbs_link_acive">Edit Profile</a>
                    </li>
                </ul>
            </div>
            <div class="profile-edit-form">
                <form action="{{ route('profile.update', ['user' => $user->id]) }}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile-editcard-bottom">
                        <label for="title">Title</label>
                        <input type="text" class="edit-profile-input" name="title"
                               value="{{ old('title') ?? $user->profile->title }}" required>
                        @error('title')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="profile-editcard-bottom">
                        <label for="description">Description</label>
                        <input type="text" class="edit-profile-input" name="description"
                               value="{{ old('description') ?? $user->profile->description }}" required>
                        @error('description')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="profile-editcard-bottom">
                        <label for="url">url</label>
                        <input type="text" class="edit-profile-input" name="url"
                               value="{{ old('url') ?? $user->profile->url }}" required>
                        @error('url')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="profile-editcard-bottom">
                        <label for="image">Profile Image</label>
                        <input type="file" class="edit-profile-input-file" name="image"
                               value="{{ old('image') ?? $user->profile->image }}">
                        @error('image')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="editBtn">
                        <div class="cta-wrapper">
                            <button type="submit" class="cta">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
