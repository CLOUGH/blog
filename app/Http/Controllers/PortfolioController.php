<?php

namespace App\Http\Controllers;

use App\Http\Presenters\ArkPresenter;
use App\Http\Requests;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request){
        
        $portfolios = Portfolio::published()
            ->paginate(12);

    	return view('portfolio.index')
    		->with(compact('portfolios'));
    }

    public function show($id){
    	return view('portfolio.show');
    }
}
