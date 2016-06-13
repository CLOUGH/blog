<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Transformers\CategoryTransformer;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Serializer\DataArraySerializer;

class CategoryController extends Controller
{
    public function index(Request $request){

    	$categories = Category::where(function($q) use($request){
    		if($request->get('q')){
    			$q->where('name','LIKE',"%$request[q]%");
    		}
    	})->get();
    	
    	$manager = new Manager();
    	$manager->setSerializer(new DataArraySerializer());

    	$resource = new Collection($categories, new CategoryTransformer);

    	return response()->json($manager->createData($resource)->toArray());
    }
}
