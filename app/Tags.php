<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $attribute = [ 'description' => ''];

    protected $fillable = ['name','description'];

    public function posts(){
    	return $this->morphsToMany(Post::class,'taggables');
    }
}
