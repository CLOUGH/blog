<?php

namespace App;

use App\Tags;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $table ='posts';

   	protected $fillable = ['title','body','post_type_id','published','publish_on'];
   	protected $casts = [
	   'published' => 'boolean'
	];
    protected $attributes = [
       'published' => false
    ];
    public function image(){
    	return $this->hasOne('App\Image','mediaable_id','id')
    		->where('mediaable_type','App\Post');
    }

    public function type(){
    	return $this->belongsTo(PostType::class,'post_type_id');
    }

    public function createdBy(){
    	return $this->belongsTo(User::class,'created_by');
    }

    public function updatedBy(){
    	return $this->belongsTo(User::class,'updated_by');
    }

    public function tags(){
        return $this->morphToMany(App\Tags::class, 'taggables');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($post)
        {
            $post->created_by = Auth::user()->id;
            $post->updated_by = Auth::user()->id;
        });

        static::updating(function($post)
        {
            $post->updated_by = Auth::user()->id;
        });
    }
}
