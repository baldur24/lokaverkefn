<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;


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

	public function likecounts()
	{
		return $this->likes()->count();
	}

    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();
        return (!is_null($like)) ? true : false;
    }

	protected $fillable = ['title', 'body', 'user_id', 'thread'];

}