<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    public function mediaable(){
    	return $this->morphTo();
    }
}
