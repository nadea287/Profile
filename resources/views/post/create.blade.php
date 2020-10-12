@extends('layouts.bloglayout')
@section('content')
    <div class="edit_form_page_wrapper">
        <div class="profile-edit-card edit-post">
            <div class="profile-edit-card-top">
                <ul class="breadcrumbs">
                    <li class="li breadcrumbs_item">
                        <a href="{{ url('/profile/' . auth()->user()->id) }}"
                           class="breadcrumbs-link">
                            My Profile
                        </a>
                    </li>
                    <li class="breadcrumbs_item">
                        <a href="" class="breadcrumbs-link breadcrumbs_link_acive">Create Post</a>
                    </li>
                </ul>
            </div>
            <div class="profile-edit-form">
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="profile-editcard-bottom">
                        <label for="caption">Image Caption</label>
                        <input type="text" class="form-control" name="caption" value="{{ old('caption') }}">
                        @error('caption')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="profile-editcard-bottom">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image">
                        @error('image')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="editBtn">
                        <div class="cta-wrapper">
                            <button type="submit" class="cta">Add New Post</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
