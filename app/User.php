<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Thread;

class User extends Authenticatable
{
    protected $table = 'users';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likedPosts()
    {
        return $this->morphedByMany('App\Thread', 'likeable')->whereDeletedAt(null);
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
