<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Tag;
use App\Transformers\TagTransformer;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Serializer\DataArraySerializer;

class TagController extends Controller
{
    public function index(Request $request){

    	$tags = Tag::where(function($q) use($request){
    		if($request->get('q')){
    			$q->where('name','LIKE',"%$request[q]%");
    		}
    	})->get();
    	


    	$manager = new Manager();
    	$manager->setSerializer(new DataArraySerializer());

    	$resource = new Collection($tags, new TagTransformer);

    	return $manager->createData($resource)->toArray();
    }
}
