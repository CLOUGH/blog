<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';

    public function image(){
    	return $this->hasOne('App\Image','mediaable_id','id')
    		->where('mediaable_type','App\Post');
    }
}
