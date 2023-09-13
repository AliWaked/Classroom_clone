<?php

namespace App\Actions\Comments;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateNewComment
{
    /**
     * Create New Comment
     *
     * @param CommentRequest $request
     * @return Comment
     */
    public function handle(CommentRequest $request): Comment
    {
        return Auth::user()->comments()->create([
            'commentable_id' => $request->input('id'),
            'commentable_type' => Str::ucfirst($request->input('type')),
            'content' => $request->content,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);
    }
}
