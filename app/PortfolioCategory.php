<?php

namespace App;

use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfolio_categories';

    public function protfolios(){
    	return $this->hasMany(Portfolio::class);
    }

}
