@extends('layouts.header')

@section('content')
    <div class="row justify-content-center">
        <h1>Edit Profile</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('profile.update', ['user' => $user->id]) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"
                           value="{{ old('title') ?? $user->profile->title }}" required>
                    @error('title')
                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description"
                           value="{{ old('description') ?? $user->profile->description }}" required>
                    @error('description')
                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">url</label>
                    <input type="text" class="form-control" name="url"
                           value="{{ old('url') ?? $user->profile->url }}" required>
                    @error('url')
                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Profile Image</label>
                    <input type="file" class="form-control-file" name="image"
                           value="{{ old('image') ?? $user->profile->image }}">
                    @error('image')
                    <small class="font-weight-bold text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark btn-block">Save Changes</button>
            </form>
        </div>
    </div>

@endsection
