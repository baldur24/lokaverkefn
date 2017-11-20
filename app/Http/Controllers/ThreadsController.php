<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\User;
use App\Comment;
use Auth;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store');
    }

    public function index()
    {
    	$threads = Thread::latest()->get();

    	return view('threads.index', compact('threads'));
    }

    public function create()
    {
    	return view('threads.create');
    }

    public function show($id)
    {
        $thread = Thread::find($id);

        $comments = Comment::where('thread_id', "=", $thread->id)->orderBy('created_at', 'desc')->get();

        $commentcounts = Comment::count('thread_id', '=', $thread->id);

        return view('threads.show', compact('thread', 'comments'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:40',
            'body' => 'required',
        ]);


        Thread::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->id()
        ]);

        session()->flash(
            'message', 'Your post has now been published.'
        );

        return redirect('/threads');
    }

    public function isLikedByMe($id)
    {
        $thread = Thread::findOrFail($id)->first();
        if (Like::whereUserId(Auth::id())->wherePostId($thread->id)->exists()){
            return 'true';
        }
        return 'false';
    }

    public function like(Thread $thread)
    {
        $existing_like = Like::withTrashed()->wherePostId($thread->id)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Like::create([
                'thread_id' => $thread->id,
                'user_id' => Auth::id()
            ]);
        } else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();
            } else {
                $existing_like->restore();
            }
        }
    }
    public function deletethread(Request $request){
            $id = $request->id;
            $dltcmt = Thread::find($id);
            $dltcmt->delete();
            return back();
    }
}