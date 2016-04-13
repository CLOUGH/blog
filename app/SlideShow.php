<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    protected $table = 'slideshows';

    public function mediaable(){
    	return $this->morphTo();
    }
}
