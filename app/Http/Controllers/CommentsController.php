<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => $data['body'],
        ]);

        return Redirect::back();
    }
}
