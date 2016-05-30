<?php

namespace App;

use App\Image;
use App\PortfolioCategory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    public function scopePublished($query){
    	return $query->where('published','1');
    }

    public function category(){
    	return $this->belognsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    public function images(){
    	return $this->belongsToMany(Image::class, 'portfolio_image');
    }
}
