<?php

namespace App\Http\Controllers;

use App\Actions\Comments\CreateNewComment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    public function store(CommentRequest $request, CreateNewComment $createNewComment): RedirectResponse
    {
        $createNewComment->handle($request);
        return back()->with('success', 'added comment');
    }
}
