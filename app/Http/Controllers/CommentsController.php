<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\CommentedToPost;
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
        $post->user->notify(new CommentedToPost($post));

        return Redirect::back();
    }

    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $this->authorize('update', $comment);
        $data = $request->validated();
        $comment->body = $data['body'];
        $comment->action = 'updated';

        $comment->save();
        return json_encode("updated");
    }

    public function markNotificationAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
    }
}
