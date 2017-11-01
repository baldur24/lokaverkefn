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

	Public function user()
	{
		return $this->belongsTo(User::class);
	}

	protected $fillable = ['title', 'body', 'user_id'];

}