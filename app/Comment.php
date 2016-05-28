<?php

namespace App;

use App\Like;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $attributes = [
    	'is_anonymous' => true,
    	'user_id' => null,
    ];

    protected $fillable = [
    	'first_name', 'last_name','message'
    ];
    public function commentable(){
    	return $this->morphTo();
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function likes(){
    	return $this->morphMany(Like::class,'likeable');
    }

    public function comments(){
    	return $this->morphMany(Comment::class, 'commentable');
    }

    public function hasReplies(){
    	return $this->comments->count() > 0;
    }

}
