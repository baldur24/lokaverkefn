<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Thread extends Model
{
    protected $table = 'threads';

    Public function comments()
	{
		Return $this->hasMany('App\Comment');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function commentcounts()
	{
		return $this->comments()->count();
	}

	protected $fillable = ['title', 'body', 'user_id', 'thread'];

}