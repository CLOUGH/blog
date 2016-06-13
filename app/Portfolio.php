<?php

namespace App;

use App\Category;
use App\Image;
use App\PortfolioCategory;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected $fillable = ['name','description','published','publish_at'];

    public function scopePublished($query){
    	return $query->where('published','1');
    }

    public function categories(){
    	return $this->belongsToMany(Category::class,'portfolio_category');
    }

    public function images(){
    	return $this->belongsToMany(Image::class, 'portfolio_image');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggables');
    }
}