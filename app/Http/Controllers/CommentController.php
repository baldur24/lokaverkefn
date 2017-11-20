<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\Comment;
use App\User;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->user_id = auth()->id();
        $comment->thread_id = $id;
        $comment->save();

        return back();
    }

    public function deletecomment(Request $request){
    		$id = $request->id;
    		$dltcmt = Comment::find($id);
    		$dltcmt->delete();
    		return back();
    }
}
