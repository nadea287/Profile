@extends('layouts.app')
@section('content')
        <div class="row justify-content-center">
            <h1>Create a Post</h1>
        </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="caption">Image Caption</label>
                    <input type="text" class="form-control" name="caption" value="{{ old('caption') }}">
                    @error('caption')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image">
                    @error('image')
                        <small class="font-weight-bold text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark btn-block">Add New Post</button>
            </form>
        </div>
    </div>
@endsection
