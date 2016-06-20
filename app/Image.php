<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['title','caption','description','url'];
    public function mediaable(){
    	return $this->morphTo();
    }
}
