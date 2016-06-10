<?php

namespace App;

use App\Comment;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $table ='posts';

   	protected $fillable = ['title','body','post_type_id','published','publish_on','excerpt'];
   	protected $casts = [
	   'published' => 'boolean'
	];
    protected $attributes = [
       'published' => false
    ];
    protected $dates = ['publish_on'];

    public function setPublishOnAttribute($value){
        $this->attributes['publish_on'] = Carbon::parse($value);
    }
    
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
        return $this->morphToMany(Tag::class, 'taggables');
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

    public function scopePublished($query){
        return $query->where('published','1');
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function excerpt($wordLimit=100){
        $dom = new \DOMDocument();
        $wordLimitRegex = "#^([\S]*\s*){0,$wordLimit}#";
        $filterHtmlRegex = "#<(\/*?)(?!(em|p|br\s*\/|strong))\w+?.+?>#";
       
        $stripedHtml = preg_replace($filterHtmlRegex,'', $this->excerpt);
        preg_match($wordLimitRegex,$stripedHtml , $matches);

        if(strlen($matches[0])==strlen($stripedHtml)){
            return $stripedHtml;          
        }

        $moreLink = "<a href='".url("posts/$this->id")."'>Read More</a>";
        $domString = "<p>".trim($matches[0])."... $moreLink</p>";
        //dd($domString);
        // $dom->loadHTML($domString);
        
        return $dom->saveHTML();
    }
}
