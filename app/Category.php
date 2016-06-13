<?php

namespace App;

use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
	protected $fillable = ['name','description'];

    public function portfolios(){
    	return $this->belongsToMany(Portfolio::class,'portfolio_category');
    }
}
