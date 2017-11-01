<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\User;
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
     
        return view('threads.show', compact('thread', 'comments', 'users', 'name'));
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

        return redirect('/threads');
    }
}
