<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;

class AdminPortfolioController extends Controller
{
    public function index(){
    	$portfolios = Portfolio::paginate(15);
        

    	return view('admin.portfolios.index')
    		->with(compact('portfolios'));
    }

    public function create(){
    	return view('admin.portfolio.create');
    }
    public function show($id)
    {
        return redirect("/admin/portfolios/$id/edit");
    }
    public function edit($id){
    	$portfolio = Portfolio::findOrFail($id);

    	return view('admin.portfolios.edit')
    		->with(compact('portfolio'));
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function update($id, Request $request){
       dd($request->all());
    }

    public function delete($id){

    }
}
