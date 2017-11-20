<?php

use App\Thread;
use App\User;
use App\Comment;

Auth::routes();

Route::get('/', function () {
    return redirect('/threads');
});

Route::get('/home', function () {
    return redirect('/threads');
});

route::get('/threads', 'ThreadsController@index');

route::post('/threads', 'ThreadsController@store')->middleware('auth');

route::get('/threads/create', 'ThreadsController@create');

route::get('/threads/{id}', 'ThreadsController@show');

route::post('/threads/{id}/comment', 'CommentController@store')->middleware('auth');

route::get('/contact', 'ContactController@contactview');

route::post('/contact', 'ContactController@contactsent')->middleware('auth');

Route::get('thread/like/{id}', ['as' => 'thread.like', 'uses' => 'LikeController@likeThread'])->middleware('auth');

Route::delete('threads/{id}','CommentController@deletecomment')->middleware('auth');

Route::delete('/threads/{id}','ThreadsController@deletethread')->middleware('auth');